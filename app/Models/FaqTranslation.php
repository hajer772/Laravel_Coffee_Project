<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqTranslation extends Model
{
    use HasFactory;

    protected $table = 'faq_translations';

    public $timestamps = false;

    protected $guarded = [];

    // accessors & Mutator start
    public function getQuestionAttribute($val)
    {
        return $this->attributes['question'] = ucwords($val);
    }
    // accessors & Mutator end
}
