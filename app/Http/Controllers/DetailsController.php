<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Models\Details; // Assuming you're using the Details model

class DetailsController extends Controller
{
    // Show all product details
    public function index()
    {
        $details = Details::all(); // Fetch all details from the model
        return view('details.index', compact('details'));
    }


    // Show create form with banners
    public function create()
    {
        $banners = Banner::orderBy('priority')->get(); // Retrieve banners ordered by priority
        return view('details.create', compact('banners'));
    }

    // Validate and store new product
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'banner_id' => 'required', // Assuming you are using banner_id, not category_id
            'description' => 'required',
            'status' => 'required',
            'photopath' => 'required|image',
        ]);

        // Store picture
        $photo = $request->file('photopath');
        $photoname = time() . '.' . $photo->extension();
        $photo->move(public_path('images/details'), $photoname);
        $data['photopath'] = $photoname;

        Details::create($data); // Create a new details record
        return redirect()->route('details.index')->with('success', 'Details Inserted Successfully');
    }

    // Show edit form with product details and banners
    public function edit($id)
    {
        $details = Details::findOrFail($id); // Retrieve details by id
        $banners = Banner::orderBy('priority')->get(); // Retrieve banners
        return view('details.edit', compact('details', 'banners'));
    }

    // Update details
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'banner_id' => 'required', // Ensure this matches with your create method
            'description' => 'required',
            'status' => 'required',
            'photopath' => 'nullable|image',
        ]);

        $details = Details::findOrFail($id); // Retrieve details by id
        $data['photopath'] = $details->photopath; // Keep the existing photo path

        if ($request->hasFile('photopath')) {
            // Store new picture
            $photo = $request->file('photopath');
            $photoname = time() . '.' . $photo->extension();
            $photo->move(public_path('images/details'), $photoname);
            $data['photopath'] = $photoname;

            // Delete old photo
            $oldphoto = public_path('images/details/' . $details->photopath);
            if (file_exists($oldphoto)) {
                unlink($oldphoto);
            }
        }

        $details->update($data); // Update the details
        return redirect()->route('details.index')->with('success', 'Details Updated Successfully');
    }

    // Delete details
    public function destroy($id)
    {
        $details = Details::findOrFail($id); // Retrieve details by id

        // Delete photo if exists
        $photoPath = public_path('images/details/' . $details->photopath);
        if (file_exists($photoPath)) {
            unlink($photoPath); // Delete the photo
        }

        $details->delete(); // Delete the details record
        return redirect()->route('details.index')->with('success', 'Details Deleted Successfully');
    }
}
