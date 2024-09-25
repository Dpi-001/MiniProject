@extends('layouts.app')
@section('content')
<h1 class="text-4xl font-extrabold text-black">Banners</h1>
<hr class="h-1 bg-red-500">


<div class="text-right my-5">
    <a href="{{route('banner.create')}}" class="bg-blue-900 text-white px-5  py-3 rounded-lg">Add Banner</a>
</div>

<table class="w-full mt-5">
    <tr>
        <th class="border p-2 bg-gray-200">Order</th>
        <th class="border p-2 bg-gray-200">Banner Type</th>
        <th class="border p-2 bg-gray-200">Action</th>
    </tr>
    @foreach ( $banners as $banner )
    <tr class="text-center">
        <td class="border p-2">{{$banner->priority}}</td>
        <td class="border p-2">{{$banner->name}}</td>
        <td class="border p-2">
            <a href="{{route('banner.edit',$banner->id)}}" class="bg-blue-900 text-white px-3 py-1 rounded">Edit</a>
            <a href="{{route('banner.destroy',$banner->id)}}" class="bg-red-600 text-white px-3 py-1 rounded onclick="return confirm(' Are you sure to Delete?')">Delete</a>
        </td>
    </tr>
@endforeach
</table>

@endsection
