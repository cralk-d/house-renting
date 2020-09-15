@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="invoice p-3 mb-3">
            <div class="row">
                <div class="col-12">
                    <h4>
                        <i class="fas fa-globe"></i> {{config('app.name')}}, Inc.
                        <small class="float-right">Date: {{ $invoice->created_at}}</small> 
                    </h4>
                </div>
             </div>
          <!-- info row -->
            <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                From
                <address>
                    <strong>{{ config('app.name')}}, Inc.</strong><br>
                    @foreach ($companies as $company)
                    {{$company->address}}
                    <br>
                    {{$company->alt_address}}<br>
                    Phone: {{$company->phone}}<br>
                    Email: {{$company->email}}
                    @endforeach
                    
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                To
                <address>
                   
                    <strong>{{ $invoice->user->name}}</strong><br>
                    Address:{{$invoice->user->profile->address}}<br>
                    Phone:  {{$invoice->user->profile->phone}}<br>
                    Email:  {{$invoice->user->email}}
                   
              
                </address>
            </div>
            
            <div class="col-sm-4 invoice-col">
                <b>Invoice</b> {{$invoice->series->prefix ?? ''}}-{{ str_pad($invoice->id, 5,'0', STR_PAD_LEFT) }}<br>
                <br>
                <b>Order ID:</b><br>
                <b>Payment Due:</b> 2/22/2014<br>
                <b>Account:</b> 968-34567
            </div>
        </div>
        
        <div class="row">
            <div class="col-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Description</th>
                            <th>Unit Price</th>
                            <th>Quantity</th>
                            <th>Sub total</th>
                        </tr>
                    </thead>
            
                    @foreach($invoice->items as $item)
                        @if($loop->last)
                            <tr>
                                <td>
                                    <strong>{{$item->name}}</strong>
                                </td>
                                <td>
                                    {{$item->description}}
                                </td>
                                <td>
                                    {{number_format($item->price, 2)}}
                                </td>
                                <td>
                                    x {{$item->quantity}}
                                </td>
            
                                <td>
                                    {{number_format($item->price * $item->quantity,2) }}
                                </td>
                            </tr>
                        @else
                            <tr>
                                <td>
                                    <strong>{{$item->name}}</strong>
                                </td>
                                <td>
                                    {{$item->description}}
                                </td>
                                <td>
                                    {{number_format($item->price,2)}}
                                </td>
                                <td>
                                    x{{$item->quantity}}
                                </td>
            
                                <td>
                                    {{number_format($item->price * $item->quantity, 2)}}
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    <tr class="total" style="text-align: left">
                        
                            <?php if ($invoice->user->tax_rate > 0 ) echo "Sales Tax (". number_format($invoice->user->tax_rate, 2) . "%)<br>"; ?>
                            <?php if ($invoice->discount > 0 && $invoice->discount_type  == 'Amount') echo 'Discount<br>'; ?>
                            <?php if ($invoice->discount > 0 && $invoice->discount_type  == 'Percent') echo "Discount ($invoice->discount%)<br>"; ?>
                            <?php if ($invoice->deposit_amount > 0 && $invoice->payments->sum('payment_amount') < $invoice->deposit_amount) echo"<strong>Partial Due</strong>";?>
                        </td>
                        <td style="text-align: right">
                            $<br>
                            
                            <br>
                            
                        </td>
                    </tr>
                </table>
                <hr>
                
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <p class="lead">Payment Methods:</p>
                <img src="../../img/credit/visa.png" alt="Visa">
                <img src="../../img/credit/mastercard.png" alt="Mastercard">
                <img src="../../img/credit/american-express.png" alt="American Express">
                <img src="../../img/credit/paypal2.png" alt="Paypal">
        
                <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    {{$invoice->notes}}
                </p>
            </div>
            <div class="col-6">
                <p class="lead">Amount Due 2/22/2014</p>
        
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th style="width:50%">Subtotal:</th>
                            <td>{{number_format($invoice->items->sum('total'),2)}}</td>
                        </tr>
                        <tr>
                            <th>Tax ({{ $invoice->user->tax_rate }})</th>
                            <td><?php if ($invoice->user->tax_rate >0) echo "" . number_format($invoice->items->sum('total')  * ((100+$invoice->user->tax_rate) / 100)-$invoice->items->sum('total'), 2) . "<br>";?></td>
                        </tr>
                        <tr>
                            <th>Total:</th>
                            <td><?php if ($invoice->discount > 0 && $invoice->discount_type  == 'Amount') 
                                echo "(" . number_format($invoice->discount, 2).")<br>"; ?>
    
                                
                                <?php if ($invoice->discount > 0 && $invoice->discount_type  == 'Percent') 
                                echo "(".number_format($invoice->items->sum('total') * (($invoice->discount) / 100), 2).")<br>"; ?>
                                ({{ number_format($invoice->payments->sum('payment_amount'),2) }})<br>
                                {{ number_format($invoice->balance,2) }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="row no-print">
            <div class="col-12">
                <a href="" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit Payment</button>
                <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;"><i class="fas fa-download"></i> Generate PDF
              </button>
            </div>
        </div>
    </div>
</div>

    
@endsection
