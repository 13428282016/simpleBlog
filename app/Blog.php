<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    //
    public $timestamps=true;
    use SoftDeletes;

   protected $guarded=['id'];
    public function  comments()
    {
        return $this->hasMany('App\Comment');
    }
}
