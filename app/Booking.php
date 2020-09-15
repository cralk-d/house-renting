<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;
class Booking extends Model
{

    const STATUS_SELECT = [
        'processing' => 'Processing',
        'confirmed'  => 'Confirmed',
        'rejected'   => 'Rejected',
    ];

    protected $fillable = [
        'post_id',
        'name',
        'email',
        'phone',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }

    
}
