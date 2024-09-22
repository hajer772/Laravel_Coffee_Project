<?php

namespace App\Models;

use App\Traits\Files\HasFile;
use App\Traits\Files\HasFiles;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory, Translatable, HasFile, HasFiles;

    protected $table = 'projects';

    protected $guarded = [];

    protected $appends = ['cover'];

    public $translatedAttributes = ['title', 'description'];

    public $timestamps = true;

    // Scopes start
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
    // Scopes end

    // accessors & Mutator start
    public function getCoverAttribute()
    {
        $cover = $this->files->where('type', 'cover')->first();
        return $cover ? $cover->path : asset('uploads/default_image.png');
    }

    public function getActive()
    {
        return $this->status == 1 ? __('words.active') : __('words.inactive');
    }
    // accessors & Mutator end
}
