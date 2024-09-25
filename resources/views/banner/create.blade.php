 @extends('layouts.app')
@section('content')
<h1 class="text-4xl font-extrabold text-black">Create Banners</h1>
<hr class="h-1 bg-red-500">

<form action="{{route('banner.store')}}" method="POST" class="mt-5">
    @csrf
    <input type="text" placeholder="Enter Priority" name="priority" class="w-full rounded-lg my-2" value="{{old('priority')}}">
    @error('priority')
    <p class="text-red-500 -mt-2">{{$message}}</p>
@enderror
    <input type="text" placeholder="Enter Banners Name" name="name" class="w-full rounded-lg my-2value="{{old('name')}}">
    @error('name')
    <p class="text-red-500 -mt-2">{{$message}}</p>
@enderror
    <div class="flex mt-4 justify-center gap-4">
        <input type="submit" value="Add Banner" class="bg-blue-600 text-white px-5 py-3 rounded-lg cursor-pointer">
        <a href="banner.index" class="bg-red-600 text-white px-10 py-3 rounded-lg">Exit</a>
    </div>
</form>
@endsection
