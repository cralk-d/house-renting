@extends('layouts.admin')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item active">Add invoice</li>
                    </ol>
                </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card" style="border-radius:0px;">
                        <div class="card-header">
                            <h3 class="card-title" style="text-align: center;">INVOICE INFORMATION</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.invoices.store')  }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-6">
                                        <label for="owner">Invoice To</label>
                                        <input type="text" class="form-control" value="MBABAZI Jacques" readonly>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="invoice number">Invoice Number</label>
                                            <input type="text" name="invoice_number" value="000000" class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label>Invoice Date</label>
                                        <input type="date" name="invoice_date" value="{{ date('Y-m-d') }}" class="form-control"/>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Due Date</label>
                                            <input type="date" name="due_date" class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="">Private Notes</label>
                                            <textarea name="private_notes" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <button class="btn btn-primary float-lg-right"><i class="fas fa-save"></i> Save Invoice Draft</button>
                            </form>   
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

@endsection