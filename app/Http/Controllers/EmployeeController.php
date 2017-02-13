<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\User;
use App\Customer;
use App\Order;
use App\Shipping;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employees.permission');
    }

    public function transaksi()
    {
        return view('employees.transaksi');
    }

    public function barang()
    {
        return view('employees.barang');
    }

   
}
