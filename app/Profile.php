<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/YwEvAtKLdlNHFerF8MbCEc5tT6JEAPOHilUNOe7G.png';

        return '/storage/' . $imagePath;
    }
    public function rates()
    {
        return $this->belongsToMany(Rate::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
   
}
