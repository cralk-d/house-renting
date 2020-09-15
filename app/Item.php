<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable=[
        'name',
        'description',
        'price',
        'quantity',
        'total',
    ];
    public function invoice()
    {
        return $this->belongsTo('App\Invoice');
    }
}
