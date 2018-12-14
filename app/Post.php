<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table name
    protected $table = 'posts';

    //setting of primary key but not necessary as well
    public $primaryKey = 'id';

    //timestamps enable/disable
    public $timestamps = true;

    //create model
    public function user(){
        return $this->belongsTo('App\User');
    }
}
