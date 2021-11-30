<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name
    protected $table = 'posts';
    // primary key
    public $primaryKey =  'id';
    //TimeStamps
    public $timestamps = true;

}
