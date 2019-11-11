<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'posts';
    // Primary Key
    Public $primaryKey ='id';
    // Timestamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\user');
    }
}
