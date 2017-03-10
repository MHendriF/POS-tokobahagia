<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Order;
use App\Shipping;
use App\Product;
use DB;

class TesController extends Controller
{
    
    public function index()
    {
        $data = Customer::all();
        $data2 = Shipping::all();
        $data3 = Product::all();
        return view('testing.tes-orderv2', compact('data', 'data2','data3'));
        //return view('testing.tes-orderv2');
    }

    public function tes()
    {
        return view('testing.tes-page');
    }

     public function Find(Request $request)
    {
        $date = $request->reportdate;
        //split date;
        $arr = explode('/', $date);
        //concate string
    
        //bulan-hari-tahun
        $date = $arr[0]. "/%/" .$arr[1];
        
        //hari-bulan-tahun
        $date = "%" . "/" . $arr[0] . "/" . $arr[1];

        //search query
        $model = DB::select("SELECT *
            FROM products
            WHERE lead_time LIKE '$date'");
        dd($model);        
    }

    public function tes2()
    {
        return view('testing.tes-order');
    }

    public function tes3()
    {
        return view('testing.tes-orderv3');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
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
