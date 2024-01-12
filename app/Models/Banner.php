<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_1' ,
        'title_2' ,
        'title_3' ,
        'short_title' ,
        'email' ,
        'phone' ,
        'location' ,
    ];



}
