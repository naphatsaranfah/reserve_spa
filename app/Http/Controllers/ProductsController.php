<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Products;




class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::paginate(5);
        return view('index', compact('products'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         
         $request->validate([
            'product_name' => 'required|max:50|min:3|unique:products',
            'product_details' => 'required|max:250|min:3',
            'product_price' => 'required|numeric'
        ],
    

        [
            'product_name.required' => 'กรุณาป้อนชื่อรายการสินค้า.',
            'product_name.unique' => 'มีรายการสินค้านี้แล้ว กรุณาเปลี่ยนชื่อสินค้า.',
            'product_name.max' => 'กรุณาป้อนข้อความ ความยาวไม่เกิน 50 ตัวอักษร.',
            'product_name.min' => 'กรุณาป้อนข้อความ มากกว่า 3 ตัวอักษร.',

            'product_details.required' => 'กรุณาป้อนรายละเอียดสินค้า.',
            'product_details.max' => 'กรุณาป้อนข้อความ ความยาวไม่เกิน 250 ตัวอักษร.',
            'product_details.min' => 'กรุณาป้อนข้อความ มากกว่า 3 ตัวอักษร.',

            'product_price.required' => 'กรุณาป้อนราคาสินค้า.',
            'product_price.numeric' => 'กรุณาป้อนราคาเป็นตัวเลขเท่านั้น.',

        ]);
    
      
        Products::create($request->all());
        return redirect()->route('products.index')->with('message', 'Created sucess fully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $product)
    {
        return view('edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $product)
    {

        $request->validate([
            'product_name' => 'required|max:50|min:3',
            'product_details' => 'required|max:250|min:3',
            'product_price' => 'required|numeric'
        ],
    

        [
            'product_name.required' => 'กรุณาป้อนชื่อรายการสินค้า.',
            'product_name.unique' => 'มีรายการสินค้านี้แล้ว กรุณาเปลี่ยนชื่อสินค้า.',
            'product_name.max' => 'กรุณาป้อนข้อความ ความยาวไม่เกิน 50 ตัวอักษร.',
            'product_name.min' => 'กรุณาป้อนข้อความ มากกว่า 3 ตัวอักษร.',


            'product_details.required' => 'กรุณาป้อนรายละเอียดสินค้า.',
            'product_details.max' => 'กรุณาป้อนข้อความ ความยาวไม่เกิน 250 ตัวอักษร.',
            'product_details.min' => 'กรุณาป้อนข้อความ มากกว่า 3 ตัวอักษร.',


            'product_price.required' => 'กรุณาป้อนราคาสินค้า.',
            'product_price.numeric' => 'กรุณาป้อนราคาเป็นตัวเลขเท่านั้น.',

        ]);
    

        $product->update($request->all());
        return redirect()->route('products.index')->with('message', 'update sucess fully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('message', 'delete successfully');

    }

    //     public function destroy(Request $request)
    // {
    //     $product = Products::find($request->product_delete_id);

    //     if($product){
    //         $product->posts()->delete();
    //         $product->delete();
    //         return redirect()->route('products.index')->with('message', 'delete successfully');
    //     }
    //     else
    //    {
    //     return redirect()->route('products.index')->with('message', 'No Product ID');
    //    }
          
     
       
    

    // }
}