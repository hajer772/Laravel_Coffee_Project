<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InnerPageTranslation extends Model
{
    use HasFactory;

    protected $table = 'inner_pages_translations';

    public $timestamps = false;

    protected $guarded = [];

   
}
