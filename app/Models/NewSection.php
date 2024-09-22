<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Files\HasFile;
use Astrotomic\Translatable\Translatable;

class NewSection extends Model
{
    use HasFactory; use HasFactory, Translatable, HasFile;

    protected $table = 'new_section';

    protected $guarded = [];

    protected $appends = ['image'];

    public $translatedAttributes = ['title'];

    public $timestamps = true;


    // Scopes start
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
    // Scopes end

    // accessors & Mutator start
    public function getImageAttribute()
    {
        $image = $this->file()->first();
        return $image ? $image->path : asset('uploads/default_image.png');
    }

    public function getActive()
    {
        return $this->status == 1 ? __('words.active') : __('words.inactive');
    }
    // accessors & Mutator end
}
