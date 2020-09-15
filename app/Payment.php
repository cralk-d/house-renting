<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'user_id',
        'invoice_id', 'payment_amount',
        'payment_type', 'payment_date', 
        'transaction_reference',
        'private_notes', 'status'
    ];
    public function invoices()
    {
        return $this->belongsTo(Invoice::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
