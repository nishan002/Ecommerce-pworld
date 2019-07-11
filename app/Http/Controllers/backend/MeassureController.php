<?php

namespace App\Http\Controllers\backend;

use App\Meassure;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MeassureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meassures = Meassure::select('id','meassure_name')->get();
        return view('backend.unit_meassure.index')->with(compact('meassures',$meassures));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.unit_meassure.add');
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
            'meassure_name'=>'required|max:20|min:1'
        ]);
        $meassure = new Meassure();
        $meassure->id = $request->input('id');
        $meassure->meassure_name= $request->input('meassure_name');
        $meassure->save();
        session()->flash('message','created unit');
        return redirect()->back();
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
        $meassures = Meassure::select('id','meassure_name')->find($id);
        return view('backend.unit_meassure.edit')->with(compact('meassures',$meassures));
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
        $request->validate([
            'meassure_name'=>'required|max:20|min:1'
        ]);
        Meassure::find($id)->update([
            'id','meassure_name'
        ]);
        return redirect()->route('meassure.index');
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
