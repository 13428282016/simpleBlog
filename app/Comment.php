<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    //
    use SoftDeletes;
    public $timestamps=true;
    public  function sender()
    {
        return $this->belongsTo('App\User','sender_id');
    }
    public  function receiver()
    {
        return $this->belongsTo('App\User','receiver_id');
    }
    public function blog()
    {
        return $this->belongsTo('App\Blog');
    }
}
