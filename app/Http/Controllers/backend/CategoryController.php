<?php

namespace App\Http\Controllers\backend;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::select('id', 'category_name','category_bangla_name','category_description')->get();
        return view('backend.category.index')->with(compact('categories', $categories));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'category_name' => 'required|max:20|min:3',
            'category_bangla_name' => 'required|max:20|min:3',
            'category_description'  => 'required|max:50',
        ]);

        $category = new Category;

        $category->category_name = trim($request->input('category_name'));
        $category->category_bangla_name = trim($request->input('category_bangla_name'));
        $category->category_description = trim($request->input('category_description'));
        $category->save();

        session()->flash('message', 'Category created');

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
//    public function show($id)
//    {
//        //
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::select('id', 'category_name','category_bangla_name','category_description')->find($id);
//        $categories = Category::find($id);
//        $categories->select('id', 'category_name','category_bangla_name','category_description')->get();
        return view('backend.category.edit')->with(compact('categories', $categories));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name'=>'required|max:20|min:3',
            'category_bangla_name'=>'required|max:20|min:3',
            'category_description'=>'required|max:50|min:3'
        ]);
        Category::find($id)->update([
            'id','category_name','category_bangla_name','image','category_description'
        ]);
        return redirect()->route('category.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect()->back();
    }
}
