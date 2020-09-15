<?php

namespace App\Http\Controllers\Admin;

use App\Company;
use App\Http\Controllers\Controller;
use App\Http\Requests\InvoiceRequest;
use App\Invoice;
use App\Serie;
use Illuminate\Http\Request;


class InvoiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $invoices = Invoice::all();
        return view('admin.invoices.index',compact('invoices'));
    }
    
    public function create()
    {
        $series = Serie::all();
        return view('admin.invoices.create');
    }

   
    public function store(InvoiceRequest $request)
    {
        $data = array_merge($request->validated(),['status'=>'Draft']);
        Invoice::create($data);
        return redirect('/admin/invoices/')->with('success','Invoice is created successfully');


    }

    public function show(Invoice $invoice)
    {
        $companies=Company::all();
        return view('admin.invoices.show',compact('invoice','companies'));
    }

    public function edit()
    {
        return view('admin.invoices.edit');
    }

 
    public function update(Request $request, Invoice $invoice)
    {
        //
    }

    public function destroy(Invoice $invoice)
    {
        $invoice->delete();
        return redirect('/admin/invoices')
        ->with('success','Invoice is trashed successfully');
    }
}
