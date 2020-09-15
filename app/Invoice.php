<?php

namespace App;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable= [
        'user_id',
        'series_id',
        'item_id',
        'invoice_date',
        'due_date',
        'number',
        'amount',
        'discount',
        'discount_type',
        'private_notes',
    ];

    

    public function series()
    {
        return $this->belongsTo(Serie::class, 'series_id');
    }
    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public static  function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub
        static ::creating(function ($model)
        {
            $model->number = Invoice::where('series_id', $model->series_id)->max('number') +1;
        });
        
    }
    public function user()
    {
    	return $this->belongsTo(User::class,'user_id');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
