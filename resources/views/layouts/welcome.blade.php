@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6 w-[80%]">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

        <!-- Product Card 1 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="https://images.unsplash.com/photo-1621274220348-41dc235ff439?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product 1" class="w-full h-48 object-cover object-top">
            <div class="p-4">
                <h2 class="text-xl font-semibold text-gray-800">Suculenta Plant</h2>
                <p class="text-gray-600 mt-2">A short description of the product goes here.</p>
                <div class="mt-4 flex justify-between items-center">
                    <span class="text-xl font-bold text-gray-800">$ 29.99</span>
                    <a class="bg-cyan-400 text-white font-semibold py-1 px-4 rounded" href="">Add Favorite</a>
                </div>
            </div>
        </div>

        <!-- Product Card 2 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="https://images.unsplash.com/photo-1621274220348-41dc235ff439?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product 2" class="w-full h-48 object-cover object-top">
            <div class="p-4">
                <h2 class="text-xl font-semibold text-gray-800">Rose Plant</h2>
                <p class="text-gray-600 mt-2">A short description of the product goes here.</p>
                <div class="mt-4 flex justify-between items-center">
                    <span class="text-xl font-bold text-gray-800">$ 49.99</span>
                    <a class="bg-cyan-400 text-white font-semibold py-1 px-4 rounded" href="">Add Favorite</a>
                </div>
            </div>
        </div>

        <!-- Product Card 3 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="https://images.unsplash.com/photo-1621274220348-41dc235ff439?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product 3" class="w-full h-48 object-cover object-top">
            <div class="p-4">
                <h2 class="text-xl font-semibold text-gray-800">Gardenia Plant</h2>
                <p class="text-gray-600 mt-2">A short description of the product goes here.</p>
                <div class="mt-4 flex justify-between items-center">
                    <span class="text-xl font-bold text-gray-800">$ 19.99</span>
                    <a class="bg-cyan-400 text-white font-semibold py-1 px-4 rounded" href="">Add Favorite</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection