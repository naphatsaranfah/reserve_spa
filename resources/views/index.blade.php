@extends('layout')

@section('content')
<div>
    <p class="text-red-800 ">Products</p>
    <div>
        <a href="{{route('products.create')}}" class="p-5 bg-fuchsia-900 rounded-md text-white">Add Products</a>
    </div>

    <div>
        @if (Session::has('message'))
        <div class="bg-green-100 border-t border-b border-green-500 text-green-700 px-4 py-3 mt-10" role="alert">
            <p class="font-bold">Success</p>
            <p class="text-sm">Create Product Success</p>
            {{Session::get('message')}}
        </div>
        @endif

        <table class="table p-4 bg-white rounded-lg shadow mt-10 w-full text-left">

            <thead class="bg-fuchsia-900  text-white ">
                <tr >
                    <th class="p-4">No</th>
                    <th class="p-4">Name</th>
                    <th class="p-4">Deatils</th>
                    <th class="p-4">Price</th>
                    <th class="p-4">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td class="border-b-2 p-4 dark:border-dark-5">{{++$i}}</td>
                    <td class="border-b-2 p-4 dark:border-dark-5">{{$product->product_name}}</td>
                    <td class="border-b-2 p-4 dark:border-dark-5">{{$product->product_details}}</td>
                    <td class="border-b-2 p-4 dark:border-dark-5">{{$product->product_price}}</td>
                    <td class="border-b-2 p-4 dark:border-dark-5">


                        <form action="{{route('products.destroy', $product->id)}}" method="POST">
                            <a href="{{route('products.edit',$product->id)}}"
                                class="p-2 rounded-md bg-orange-500 text-white">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="p-2 rounded-md bg-red-900 text-white">Delete</button>
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>
@endsection