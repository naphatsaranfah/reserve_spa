@extends('layout')
@section('content')


<div>
    <ul class="flex">
        <li class="">
            <a href="{{route('products.index')}}" class="text-fuchsia-900 hover:text-fuchsia-900"
                href="#">สินค้าทั้งหมด</a>
        </li>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-gray-400 ">
            <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
        </svg>

        <li class="mr-6">
            <a href="{{route('products.create')}}" class="text-gray-400 hover:text-fuchsia-900" href="#">เพิ่มสินค้า</a>
        </li>
    </ul>

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

                <tr>
                    <th class="p-4">ลำดับ</th>
                    <th class="p-4">ชื่อสินค้า</th>
                    <th class="p-4">รายละเอียด</th>
                    <th class="p-4">ราคา</th>
                    <th class="p-4">จัดการ</th>
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
                                class="p-2 rounded-md bg-orange-500 text-white">แก้ไข</a>

                            @csrf
                            @method('DELETE')


                            <button type="submit" class="p-2 rounded-md bg-red-900 text-white show_confirm"
                                data-toggle="tooltip" title='Delete'>Delete</button>

                            <!-- <button type="button" class="p-2 rounded-md bg-red-900 text-white deleteProduct"
                            value="{{ $product->id }}" data-modal-toggle="default-modal">ลบ</button> -->

                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

<script type="text/javascript">
$('.show_confirm').click(function(event) {
    var form = $(this).closest("form");
    var name = $(this).data("name");
    event.preventDefault();
    swal({
            title: `คุณต้องการลบสินค้ารายการนี้ใช่หรือไม่ ?`,
            text: "",
            icon: "warning",
            // buttons: true,
            buttons: {
                cancel: "Cancel",
                confirm: "Confirm",
            }
        })
        .then((willDelete) => {
            if (willDelete) {
                form.submit();
            }
        });
});
</script>

@endsection