<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    public function orders()
    {
        return $this->belongsTo(Order::class);
    }
    public function invoices()
    {
        return $this->belongsTo(Invoice::class);
    }
}
