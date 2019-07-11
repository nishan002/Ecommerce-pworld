<?php

namespace App\Http\Controllers\backend;

use App\Category;
use App\Meassure;
use App\Product;
use App\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('backend.Product.index')->with(compact('products',$products));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::select('id', 'category_name')->get();
        $sub_categories = Subcategory::select('id','sub_category_name')->get();
        $meassures = Meassure::select('id','meassure_name')->get();
        return view('backend.Product.add')->with(compact('categories',$categories))->with(compact('sub_categories',$sub_categories))->with(compact('meassures',$meassures));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id'=>'required|max:20|min:1',
            'subcategory_id'=>'required|max:20|min:1',
            'product_name'=>'required|max:20|min:1',
            'product_name_bangla'=>'required|max:30|min:1',
            'unit_meassure_id'=>'required|max:10|min:1',
            'description'=>'required|max:50|min:1'
    ]);
        $products= new Product();
        $products->id= $request->input('id');
        $products->category_id= $request->input('category_id');
        $products->subcategory_id= $request->input('subcategory_id');
        $products->product_name= $request->input('product_name');
        $products->product_name_bangla= $request->input('product_name_bangla');
        $products->unit_meassure_id= $request->input('unit_meassure_id');
        $products->description= $request->input('description');
        $products->save();
        session()->flash('message','created product');
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
