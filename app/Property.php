<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
	
   public $directory = "images/";

   public function photo()
   {
   	 return $this->hasOne('App\Photo');
   }

   public function category()
   {
   	 return $this->belongsTo('App\Category');
   }

   public function feature()
   {
   	 return $this->belongsTo('App\Feature');
   }

   public function status()
   {     
     return $this->belongsTo('App\Status');
   }

   public function type()
   {     
     return $this->belongsTo('App\Type');
   }

   public function getPhotoIdAttribute()
   {
   		return $this->directory;
   }
}
