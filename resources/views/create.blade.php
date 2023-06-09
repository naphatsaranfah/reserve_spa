@extends('layout')

@section('content')
<div class="">
<p class="text-xl ">Add Products</p>

    <div class="mt-5">
        <a href="{{route('products.index')}}" class="text-md text-fuchsia-900 underline underline-offset-1">All Products</a>
    </div>


    <div class="w-full max-w-xl mt-10">
        <form action="{{route('products.store')}}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="product_name">
                    Name
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="product_name" name="product_name" type="text" placeholder="ProductName">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="product_details">
                    Details
                </label>
                <textarea
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="product_details" name="product_details" type="text" placeholder="ProductDetails"></textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="product_price">
                    Price
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="product_price" name="product_price" type="text" placeholder="ProductPrice">
            </div>


            <div class="mb-4">
                <button type="submit" class="bg-fuchsia-900 text-white rounded-md p-4 w-full">บันทึก</button>
            </div>



</div>
@endsection