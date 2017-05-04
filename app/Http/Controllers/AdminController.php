<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Main_Transaction;
use DB;
use Auth;
use App\User;
use Sentinel;

class AdminController extends Controller
{
    public function index()
    {
        return view('admins.account');
    }

    public function gaji()
    {
        return view('admins.gaji');
    }

    public function FindGaji(Request $request)
    {
        $date = $request->reportdate;
        //split date;
        $arr = explode('-', $date);
        //concate string
        $date = $arr[1] ."-". $arr[0] ."-%";
        //search query
        $model = DB::select("SELECT user_id as uid, product_id as pid, trans_desc_id as tid, description as des, transaction_date as tdate, unit_order as unit, quantity_out as qout, note as nt, cost_price as cost
            FROM main_transactions
            WHERE transaction_date LIKE '$date'");

        dd($model);        
        //return view('employees.order.detail_order', ['data' => $model]);
       //return redirect('gaji');
    }

    public function transfer_barang()
    {
        return view('admins.transfer_barang');
    }

    public function expense()
    {
        return view('admins.expense');
    }

    public function pengeluaran()
    {
        return view('admins.pengeluaran');
    }

    public function general()
    {
        $user = Auth::user();
        return view('general', compact('user'));
    }

    public function master()
    {
        $user = Auth::user();
        return view('master', compact('user'));
    }

    public function report()
    {
        $user = Auth::user();
        return view('report', compact('user'));
    }
}
