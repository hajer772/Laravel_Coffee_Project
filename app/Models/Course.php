<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory, Translatable;

    protected $table = 'courses';

    protected $guarded = [];


    public $translatedAttributes = ['title','description'];

    public $timestamps = true;

    // accessors & Mutator end
}
