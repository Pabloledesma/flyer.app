<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['photo'];

    protected $table = 'flyer_photos';

    public function flyer()
    {
    	return $this->belongsTo('App\Flyer');
    } 
}
