<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    protected $table = 'contact_us';

    protected $guarded = [];

    public $timestamps = true;


    // accessors & Mutator start
    public function getNameAttribute($val)
    {
        return $this->attributes['name'] = ucwords($val);
    }

    public function getMessageAttribute($val)
    {
        return $this->attributes['message'] = ucfirst($val);
    }
    // accessors & Mutator end

}
