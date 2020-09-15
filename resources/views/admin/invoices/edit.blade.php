@extends('layouts.admin')

@section('content')


        <div class="container">
            <h1>Edit Invoice</h1>
            <div class="row" style="padding-top: 10px">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Edit Invoice</div>
                        <div class="card-body">
                            <form method="POST" action="">
                                {{method_field('PUT')}}
                                @csrf
                            <div class="row">

                            <div class="col-md-4">
                                Client:
                                <input type="text" name="client_id" value="" class="form-control" hidden/>
                                <input type="text" value="" class="form-control" disabled/>
                                <input type="text" value="" class="form-control" disabled/>
                                <input type="text" value="" class="form-control" disabled/>
                                <a href="">Edit Client</a> | <a href="">View Client</a>
                                <br>
                                Invoice Notes:
                                <textarea name="private_notes" class="form-control"></textarea>
                            </div>
                            <div class="col-md-4">
                                Invoice Date:
                                <input type="date" name="invoice_date" value="" class="form-control"/>
                                Due Date:
                                <input type="date" name="due_date" value="" class="form-control"/>
                                Deposit Amount:
                                <input type="text" name="deposit_amount" value="" class="form-control"/>
                            </div>
                            <div class="col-md-4">
                                Invoice Number:
                                <input type="text" name="invoice_number"  value="" class="form-control"/>
                                Discount:
                                <input type="text" name="discount" value="" class="form-control"/>
                                Discount Type:
                                <select id="discount_type" name="discount_type" class="form-control">
                                    <option value="Amount" >Amount</option>
                                    <option value="Percent" >Percent</option>
                                </select>

                            </div>

                        </div>
                            <input type="submit" value="Save" class="btn btn-primary float-right">
                        </form>
                    </div>
                    </div>

                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Edit Items</div>
                        <div class="card-body">
                            <table class="table table-responsive-sm">
                                <thead>
                                <th>Invoice Number</th>
                                <th>Product Name</th>
                                <th>Description</th>
                                <th>Unit Cost</th>
                                <th>Quantity</th>
                                <th>Line Total</th>
                                <th></th>
                                </thead>
                                <tbody>
                                
                                </tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td style="font-size: medium">
                                        Subtotal:<br>
                                        <strong>Balance:</strong>
                                    </td>
                                    
                                </tr>
                            </table>
                    </div>
                    </div>
                </div>
                
            </div>
        </div>
@endsection
