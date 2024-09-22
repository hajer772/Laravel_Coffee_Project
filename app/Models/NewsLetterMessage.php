<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsLetterMessage extends Model
{
    use HasFactory;

    protected $table = 'news_letter_messages';

    protected $guarded = [];

    public $timestamps = true;

    // accessors & Mutator start
    public function setSubjectAttribute($val){
        $this->attributes['subject'] = ucwords($val);
    }
    // accessors & Mutator end
}
