<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Post extends Model
{
    // Table Name
    protected $table = 'posts';
    // primary key
    public $primaryKey =  'id';
    //TimeStamps
    public $timestamps = true;



    public function user(){
        return $this->belongsTo('App\Models\User');
    }

}
