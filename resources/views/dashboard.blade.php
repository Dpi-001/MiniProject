@extends('layouts.app')
@section('content')
<h1 class="text-4xl font-extrabold text-black">Dashboard</h1>
<hr class="h-1 bg-red-500">

<div class="mt-5 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8">
    <div class="relative overflow-hidden bg-white bg-opacity-30 p-5 shadow rounded-lg backdrop-blur-lg">
        <h2 class="text-2xl font-bold text-black">Banners</h2>
        <p class="text-black">Total Banners: 5</p>
    </div>

    <div class="relative overflow-hidden bg-white bg-opacity-30 p-5 shadow rounded-lg backdrop-blur-lg">
        <h2 class="text-2xl font-bold text-black">Details</h2>
        <p class="text-black">Total Details: 10</p>
    </div>

    <div class="relative overflow-hidden bg-white bg-opacity-30 p-5 shadow rounded-lg backdrop-blur-lg">
        <h2 class="text-2xl font-bold text-black">Users</h2>
        <p class="text-black">Total Users: 22</p>
    </div>
</div>
@endsection
