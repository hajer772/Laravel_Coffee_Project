<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];

    // accessors & Mutator start
    public function getWebSiteTitleAttribute($val)
    {
        return $this->attributes['website_title'] = ucwords($val);
    }
    // accessors & Mutator end
}
