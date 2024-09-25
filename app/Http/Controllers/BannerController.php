<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        // Fetch banners ordered by priority
        $banners = Banner::orderBy('priority')->get();
        return view('banner.index', compact('banners'));
    }

    public function create()
    {
        return view('banner.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'priority' => 'required|numeric',
            'name' => 'required',
        ]);

        Banner::create($data);

        return redirect()->route('banner.index')->with('success', 'Banner Created Successfully');
    }

    public function edit($id)
    {
        // Find the banner by ID
        $banner = Banner::find($id);

        if (!$banner) {
            return redirect()->route('banner.index')->with('error', 'Banner not found.');
        }

        return view('banner.edit', compact('banner'));
    }

    public function update(Request $request, $id)
    {
        // Validate input data
        $data = $request->validate([
            'priority' => 'required|numeric',
            'name' => 'required',
        ]);

        // Find the banner and update it
        $banner = Banner::find($id);
        if (!$banner) {
            return redirect()->route('banner.index')->with('error', 'Banner not found.');
        }

        $banner->update($data);

        return redirect()->route('banner.index')->with('success', 'Banner Updated Successfully');
    }

    public function destroy($id)
    {
        // Find the banner and delete it
        $banner = Banner::find($id);
        if (!$banner) {
            return redirect()->route('banner.index')->with('error', 'Banner not found.');
        }

        $banner->delete();

        return redirect()->route('banner.index')->with('success', 'Banner Deleted Successfully');
    }
}
