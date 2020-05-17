<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
   protected $fillable = [
        'name','photo',
    ];

    public $directory = "images/";

    public function getPhotoAttribute($value)
    {
    	return $this->directory .$value;    }
}
