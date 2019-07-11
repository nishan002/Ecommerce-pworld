<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\PurchaseDetails;
use App\Purchase;
use App\Product;
use App\Meassure;
use App\BranchStock;

class PurchaseDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchase_details = PurchaseDetails::all();
        return view('backend.purchase_details.index',compact('purchase_details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $purchases = Purchase::all();
        $products = Product::all();
        $meassures = Meassure::all();
        return view('backend.purchase_details.create',compact('purchases','products','meassures'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //  dd($request->branch_quantity) ;

        $purchase_details = new PurchaseDetails();
        $purchase_details->purchase_id = $request->purchase_id;
        $purchase_details->product_id = $request->product_id;
        $purchase_details->unit_meassure_id = $request->unit_meassure_id;
        $purchase_details->quantity = $request->quantity;
        $purchase_details->total_price = $request->total_price;
        $purchase_details->save();


        foreach ($request->branch_quantity as $key => $value) {
            //$i = $key+1;
            $branchStock = new BranchStock();
            $branchStock->chain_store_id = $key+1;
            $branchStock->purchase_details_id = $purchase_details->id;
            $branchStock->product_id = $request->product_id;
            $branchStock->quantity = $value;
            $branchStock->save();
        }

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
