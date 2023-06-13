@extends('layout')
@section('content')

<div>

    <ul class="flex">
        <li class="">
            <a href="{{route('products.index')}}" class="text-gray-400 hover:text-fuchsia-900"
                href="#">สินค้าทั้งหมด</a>
        </li>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-gray-400">
            <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
        </svg>
        <li class="mr-6">
            <a class="text-fuchsia-900 " href="#">แก้ไขสินค้า</a>
        </li>
    </ul>

    <div class="w-full mt-10 px-64">
        <form action="{{route('products.update', $product->id)}}" method="POST"
            class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            @method('PUT')

            <div class="mb-4 ">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="product_name">
                    Name
                </label>

                <input type="text"
                    class="shadow appearance-none  rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @if($errors->has('product_name')) border border-red-600 @else border-none  @endif"
                    id="product_name" type="text" name="product_name" value="{{$product->product_name}}" />

                @error('product_name')
                <div class="mt-2">
                    <span class="text-red-600 ">{{$message}}</span>
                </div>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="product_details">
                    Details
                </label>

                <textarea type="text"
                    class="shadow appearance-none  rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @if($errors->has('product_details')) border border-red-600 @else border-none  @endif"
                    id="product_details" type="text" name="product_details">{{$product->product_details}}</textarea>

                @error('product_details')
                <div class="mt-2">
                    <span class="text-red-600 ">{{$message}}</span>
                </div>
                @enderror

            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="product_price">
                    Price
                </label>
                <!-- <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{$product->product_price}}" id="product_price" name="product_price" type="text"
                    placeholder="ProductPrice"> -->
                <input type="text"
                    class="shadow appearance-none  rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @if($errors->has('product_price')) border border-red-600 @else border-none  @endif"
                    id="product_price" type="text" name="product_price" value="{{$product->product_price}}" />

                @error('product_price')
                <div class="mt-2">
                    <span class="text-red-600">{{$message}}</span>
                </div>
                @enderror
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-fuchsia-900 text-white rounded-md p-4 w-full">บันทึกการแก้ไข</button>
            </div>
    </div>
</div>

@endsection