<?php

namespace App\Models;

use App\Traits\Files\HasFile;
use App\Traits\Files\HasFiles;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InnerPage extends Model
{
    use HasFactory, Translatable, HasFile, HasFiles;

    protected $table = 'inner_pages';

    protected $guarded = [];

    protected $appends = ['image'];

    public $translatedAttributes = ['title', 'description','subtitle'];

    public $timestamps = true;

    public function getImageAttribute()
    {
        $image = $this->files->where('type', 'image')->first();
        return $image ? $image->path : asset('uploads/default_image.png');
    }

}
