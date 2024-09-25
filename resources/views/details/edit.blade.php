@extends('layouts.app')
@section('content')
<h1 class="text-4xl font-extrabold text-black">Edit Details</h1>
<hr class="h-1 bg-red-500">

<form action="{{route('details.update',$details->id)}}" method="POST" class="mt-5" enctype="multipart/form-data">
    @csrf
    <select name="banner_id" id="" class="w-full rounded-lg my-2">
        {{-- categoryid is insert --}}
        @foreach ($detailes as $details)
        <option value="{{$banner->id}}" @if ($details->banner_id == $banner->id)
           selected
          @endif>{{$banner>name}}</option>
        @endforeach
    </select>
    <input type="text" placeholder="Enter  Banner Titles" name="name" class="w-full rounded-lg my-2" value="{{$details->name}}">
    @error('name')
        <p class="text-red-500 -mt-2">{{$message}}</p>
    @enderror

    <textarea name="description" id="" cols="30" rows="5" placeholder="Enter  Description" class="w-full rounded-lg my-2">{{$details->description}}</textarea>
    @error('description')
        <p class="text-red-500 -mt-2">{{$message}}</p>
    @enderror

     <select name="status" id="" class="w-full rounded-lg my-2">
        <option value="Show" @if ($details ->status=='Show') selected @endif>Show</option>
        <option value="Hide @if ($details->status=='Hide') selected @endif">Hide</option>
     </select>
    <input type="file" name="photopath" class="w-full rounded-lg my-2">
    @error('photopath')
        <p class="text-red-500 -mt-2">{{$message}}</p>
    @enderror

    <p>Current Pictures</p>
    <img src="{{asset('images/detail/'.$details->photopath)}}" alt="" class="w-44">

    <div class="flex justify-center">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Update Banner</button>
        <a href="{{route('details.index')}}" class="bg-red-500 text-white px-4 py-2 rounded-lg ml-2">Cancel</a>
    </div>
</form>
@endsection
