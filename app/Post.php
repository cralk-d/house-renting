<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];
    
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeApproved($query)
    {
        return $query->where('status', 1);
    }
    public function scopePending($query)
    {
        return $query->where('status',0);
    }
}
