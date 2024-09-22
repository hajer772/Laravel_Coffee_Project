<?php

namespace App\Models;

use App\Traits\Contacts\HasContact;
use App\Traits\Files\HasFile;
use App\Traits\Files\HasFiles;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory, Translatable, HasFile, HasContact;

    protected $table = "settings";

    protected $guarded = [];

    protected $appends = ["logo", "white_logo", "favicon", "contact_img", "footer_img","breadcrumb"];

    public $translatedAttributes = [
        "website_title",
        "address",
        "copyrights",
        "meta_title",
        "meta_keywords",
        "meta_description",
        "footer_description",
    ];

    public $timestamps = true;

    public function getLogoAttribute()
    {
        $logo = $this->file()->where("type", "logo")->first();
        return $logo ? $logo->path : asset('uploads/default_image.png');
    }

    public function getWhiteLogoAttribute()
    {
        $white_logo = $this->file()->where("type", "white_logo")->first();
        return $white_logo ? $white_logo->path : asset('uploads/default_image.png');
    }

    public function getFaviconAttribute()
    {
        $favicon = $this->file()->where("type", "favicon")->first();
        return $favicon ? $favicon->path : asset('uploads/default_image.png');
    }

    public function getFooterImgAttribute()
    {
        $footer_img = $this->file()->where("type", "footer_img")->first();
        return $footer_img ? $footer_img->path : asset('uploads/default_image.png');
    }

    public function getContactImgAttribute()
    {
        $contact_img = $this->file()->where("type", "contact_img")->first();
        return $contact_img ? $contact_img->path : asset('uploads/default_image.png');
    }

    public function getBreadcrumbAttribute()
    {
        $contact_img = $this->file()->where("type", "breadcrumb")->first();
        return $contact_img ? $contact_img->path : asset('uploads/default_image.png');
    }

    public function getWebsiteTitleAttribute($val)
    {
        return $this->attributes["website_title"] = ucwords($val);
    }

    public function getAddressAttribute($val)
    {
        return $this->attributes["address"] = ucwords($val);
    }

    public function getCopyrightsAttribute($val)
    {
        return $this->attributes["copyrights"] = ucwords($val);
    }

    public function getMetaTitleAttribute($val)
    {
        return $this->attributes["meta_title"] = ucwords($val);
    }

    public function getMetaDescriptionAttribute($val)
    {
        return $this->attributes["meta_description"] = ucwords($val);
    }

    public function getFooterDescriptionAttribute($val)
    {
        return $this->attributes["footer_description"] = ucwords($val);
    }
}
