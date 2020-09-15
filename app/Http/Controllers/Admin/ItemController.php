<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        
        $item = new Item($request->validate(['name'=>'required','description'=>'required','price'=>'required','quantity'=>'required',]));

        $item->invoice_id = $request->invoice_id;
        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->quantity = $request->quantity;
        $item->total = $request->price * $request->quantity;
        $item->save();
        if($item->invoice->discount_type == 'Amount') {
            Invoice::where('id',$item->invoice_id)->update(array(
                'amount'=> $item->invoice->items->sum('line_total') * ((100+$item->invoice->user->tax_rate) / 100),
                'balance'=> $item->invoice->items->sum('line_total') * ((100+$item->invoice->user->tax_rate) / 100)
                    - $item->invoice->discount
                    - $item->invoice->payments->sum('amount')));
        }elseif($item->invoice->discount_type == 'Percent'){
            Invoice::where('id',$item->invoice_id)->update(array(
                'amount'=>  $item->invoice->items->sum('total') * ((100+$item->invoice->user->tax_rate) / 100),
                'balance'=> $item->invoice->items->sum('total') * ((100-$item->invoice->discount) / 100)+
                    ( $item->invoice->items->sum('total')
                        *  (100+$item->invoice->client->tax_rate) / 100)
                    -$item->invoice->items->sum('total')
                    -$item->invoice->payments->sum('amount'),
            ));
        }
        return redirect()->back()->withStatus('Invoice items are added successfull!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }
}
