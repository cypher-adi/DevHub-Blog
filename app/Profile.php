<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{   
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : '/profile/tBvJBst7LnoovPM2cnAAvpW4yfBmC1CdWGS1kGJS.png';
        return '/storage/'.$imagePath;
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
