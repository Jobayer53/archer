<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;
    protected $fillable =[
        'title'   ,
        'client'   ,
        'date'   ,
        'url'   ,
        'categorie'   ,
        'technologie'   ,
        'tags'   ,
        'description'   ,
        'image' ,
        'status' ,
    ];
    public function project_images(){
        return $this->hasMany(ProjectImage::class, 'project_id' );
    }
}


