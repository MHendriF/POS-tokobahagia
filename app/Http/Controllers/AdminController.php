<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
