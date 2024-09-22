<?php

namespace App\Models;

use App\Traits\Files\HasFile;
use App\Traits\Files\HasFiles;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory, Translatable, HasFile, HasFiles;

    protected $table = 'portfolios';

    protected $guarded = [];

    protected $appends = ['image'];

    public $translatedAttributes = ['title', 'description'];

    public $timestamps = true;

    // relations start
    public function category(){
        return $this->belongsTo(Category::class);
    }
    // relations end

    // Scopes start
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
    // Scopes end

    // accessors & Mutator start
    public function getImageAttribute()
    {
        $image = $this->files->where('type', 'image')->first();
        return $image ? $image->path : asset('uploads/default_image.png');
    }

    public function getActive()
    {
        return $this->status == 1 ? __('words.active') : __('words.inactive');
    }
    // accessors & Mutator end
}
