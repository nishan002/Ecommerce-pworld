<?php

namespace App\Http\Controllers\backend;

use App\Category;
use App\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub_categories = Subcategory::select('id','category_id','sub_category_name','category_bangla_name','category_description','image')->get();
        return view('backend.sub_category.index')->with(compact('sub_categories',$sub_categories));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::select('id', 'category_name')->get();
        return view('backend.sub_category.add')->with(compact('categories', $categories));
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
            'category_id'=> 'required|max:20|min:1'
            ,'sub_category_name'=>'required|max:20|min:3','category_bangla_name'=>'required|max:20|min:3',
            'category_description'=>'required|max:50|min:3'
        ]);
        $sub_category = new Subcategory();
        $sub_category->category_id = $request->input('category_id');
        $sub_category->sub_category_name = $request->input('sub_category_name');
        $sub_category->category_bangla_name = $request->input('category_bangla_name');
        $sub_category->category_description = $request->input('category_description');
        $sub_category->image = $request->input('image');
        $sub_category->save();
        session()->flash('message', 'Sub Category created');
        return redirect()->back();
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $categories = Category::select('id', 'category_name')->get();
        $sub_categories = Subcategory::select('id','category_id','sub_category_name','category_bangla_name','category_description','image')->find($id);
        return view('backend.sub_category.edit')->with(compact('sub_categories',$sub_categories))->with(compact('categories',$categories));
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
