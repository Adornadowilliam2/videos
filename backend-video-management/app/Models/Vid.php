<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vid extends Model
{
    use HasFactory;
    protected $table = "videos";
    //::create follows fillable
    protected $fillable = [
        'title',
        'description',
        'date_uploaded',
        'url',
        'thumbnail'
    ];
    public $timestamps = false;
}