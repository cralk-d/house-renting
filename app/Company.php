<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name',
        'address',
        'alt_address',
        'city',
        'email',
        'mobile',
        'url',
        'header_notes',
        'footer_notes_left',
        'footer_notes_right',
        'logo',
    ];
}
