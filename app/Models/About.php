<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'short_title',
        'name',
        'birth_date',
        'nationality',
        'work_status',
        'phone',
        'email',
        'address',
        'freelancer',
    ];


}
