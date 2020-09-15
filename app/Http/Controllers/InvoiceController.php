<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;
class InvoiceController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return \view('invoices.index');
    }

    public function show(Invoice $invoice)
    {
        return view('invoices.show',compact('invoice'));

    }
}
