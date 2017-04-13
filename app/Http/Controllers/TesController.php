<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Product;
use App\Test;
use Session;
use Input;
use DB;

class TesController extends Controller
{
    
    public function index()
    {
        // $data = Customer::all();
        // $data2 = Shipping::all();
        // $data3 = Product::all();
        // return view('testing.tes-orderv2', compact('data', 'data2','data3'));
        
        $data = Product::all();
        return view('testing.tes-page', compact('data'));

    }

    // public function tes()
    // {
    //     $data = Product::all();
    //     return view('testing.tes-page', compact('data'));
    // }

    public function listProduct()
    {
        $input = Input::get('option');
        $numbers = DB::table('products')
        ->where('id', $input)
        ->orderBy('id', 'asc')
        ->lists('product_name','id');

        return Response::json($numbers);
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
        //dd($request->all());
        // $input = $request->all();

        // $tes = new Test();
        // $tes->message = $input['message'];

        // $tes->save($request->all());

        // $input = Input::get('message');
        // DB::table('test')->insert($input);

        // foreach ($request->get('message') as $message) {
        //     $tes = new Test;
        //     $tes->maksimal = $request->get('maksimal');
        //     $tes->message = $message;
        //     $tes->save();
        // }

        $no = $request->no;
        $product_id = $request->product_id;
        $quantity = $request->quantity;
        $price_per_unit = $request->price_per_unit;
        $discount = $request->discount;
        $price_total = $request->price_total;

        
        for($i=0; $i<count($no); $i++) {
            $tes = new Test();
            $tes->no = $no[$i];
            $tes->product_id = $product_id[$i];
            $tes->quantity = $quantity[$i];
            $tes->price_per_unit = $price_per_unit[$i];
            $tes->discount = $discount[$i];
            $tes->price_total = $price_total[$i];
            $tes->save();
        }

        return "Success";

        // $test = new Test(array(
        //         'product_id'     => $request->get('product_id'),
        //         'no'      => $request->get('no'),
        //         'quantity'       => $request->get('quantity'),
        //         'price_per_unit' => $request->get('price_per_unit'),
        //         'discount'       => $request->get('discount'),
        //         'price_total'    => $request->get('price_total')
        //     ));
            
        // if($test->save($request->all()))
        // {
        //     Session::flash('new', 'New Purchase was successfully added!');
        //     return redirect()->to('tes');
        // }

        // foreach($request->get('product_id') as $product_id) {
        // $p =  new Purchase_Detail;
        // $p->product_id = $product_id;
        // $p->save();
        // }
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
