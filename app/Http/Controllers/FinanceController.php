<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Main_Transaction;
use App\Finance;
use DB;

class FinanceController extends Controller
{
    public function index()
    {
        $data = Finance::all();
        return view('admins.finance', compact('data'));
    }

    public function income()
    {   
        $data = null;
        return view('admins.finance.income', compact('data'));
    }

    public function outcome()
    {
        return view('admins.finance.outcome');
    }

    public function findIncome(Request $request)
    {
        $date = $request->reportdate;
        //split date;
        $arr = explode('/', $date);
        //concate string
        $date = "%". "/" .$arr[0]. "/".$arr[1];
        //search query
        // $model = DB::select("SELECT user_id as uid, product_id as pid, trans_desc_id as tid, description as des, transaction_date as tdate, unit_order as unit, quantity_out as qout, note as nt, cost_price as cost
        //     FROM main_transactions
        //     WHERE transaction_date LIKE '$date'");

        $data = DB::select("SELECT SUM(cost_price) as income
            FROM main_transactions
            WHERE transaction_date LIKE '$date'");

        //dd($data);
        return view('admins.finance.income', compact('data'));        
        //return view('admins.finance.income', ['data' => $data]);

        //return view('admins.finance.income')->with('data', $data);
       //return redirect('gaji');
    }

    public function findFinance(Request $request)
    {
        $date = $request['searchdate'];
        $arr = explode('/', $date);
        $date = $arr[1]. "-" .$arr[0]. "-". "%";
        //$date = $arr[1]. "-" .$arr[0];

        $data = DB::select("SELECT *
            FROM finance
            WHERE created_date LIKE '$date'");

        //$data = Finance::all()->where('created_date',$date);

       return view('admins.finance', compact('data'));
        //dd($data);
        
    }
}
