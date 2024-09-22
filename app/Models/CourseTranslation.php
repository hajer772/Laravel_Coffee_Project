<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseTranslation extends Model
{
    use HasFactory;

    protected $table = 'course_translations';

    public $timestamps = false;

    protected $guarded = [];
}
