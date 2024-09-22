<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $table = 'files';
    public $timestamps = true;
    protected $guarded = [];

    protected $hidden = ['created_at', 'updated_at'];

    //relationship start
    public function filable()
    {
        return $this->morphTo();
    }

    public function getPathAttribute($value)
    {
        return $value ? asset('uploads/' . $value) : null ;
    }


    //relationship end
}
