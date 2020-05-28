<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
   protected $fillable = [
        'email', 'address', 'phone', 'logo', 'footer', 'social'
    ];

    public $directory = "images/";

    public function getPhotoIdAttribute()
   {
        return $this->directory;
   }


}
