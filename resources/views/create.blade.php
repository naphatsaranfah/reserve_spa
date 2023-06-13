@extends('layout')

@section('content')
<div class="">

    <ul class="flex">
        <li class="">
            <a href="{{route('products.index')}}" class="text-gray-400 hover:text-fuchsia-900"
                href="#">สินค้าทั้งหมด</a>
        </li>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-gray-400">
            <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
        </svg>

        <li class="mr-6">
            <a class="text-fuchsia-900 " href="#">เพิ่มสินค้า</a>
        </li>
    </ul>

    <div class="w-full mt-10 px-64">
        <form action="{{route('products.store')}}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="product_name">
                    ชื่อสินค้า
                </label>
              
                    <input type="text" class="shadow appearance-none  rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @if($errors->has('product_name')) border border-red-600 @else border-none  @endif"  id="product_name" type="text"  name="product_name" value="{{ old('product_name') }}" />

                @error('product_name')
                <div class="mt-2">
                    <span class="text-red-600 ">{{$message}}</span>
                </div>
                @enderror

            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="product_details">
                    รายละเอียด
                </label>



                <textarea type="text" class="shadow appearance-none  rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @if($errors->has('product_details')) border border-red-600 @else border-none  @endif"  id="product_details" type="text"  name="product_details" value="{{ old('product_details') }}"></textarea>

                    
                @error('product_details')
                <div class="mt-2">
                    <span class="text-red-600 ">{{$message}}</span>
                </div>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="product_price">
                    ราคา
                </label>
                
                <!-- <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                    id="product_price" name="product_price" type="text" placeholder="" > -->

                    <input type="text" class="shadow appearance-none  rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @if($errors->has('product_price')) border border-red-600 @else border-none  @endif"  id="product_price" type="text"  name="product_price" value="{{ old('product_price') }}" />


                @error('product_price')
                <div class="mt-2">
                    <span class="text-red-600">{{$message}}</span>
                </div>
                @enderror
            </div>


            <div class="mb-4">
                <button type="submit" class="bg-fuchsia-900 text-white rounded-md p-4 w-full">บันทึก</button>
            </div>

    </div>
</div>
@endsection