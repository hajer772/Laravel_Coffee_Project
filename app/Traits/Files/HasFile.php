<?php


namespace App\Traits\Files;


use App\Models\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

trait HasFile
{
    public function file()
    {
        return $this->morphOne(File::class, 'filable');
    }

    public function uploadFile()
    {
        if (request()->hasFile('image')) {
            //Store the new image in public images folder & set the path in $image variable
            $image = request()->image->store('images');
            //Create a new user's image in images table
            $this->file()->create(['path' => $image, 'type' => 'image']);
        }

        if (request()->hasFile('cover')) {
            $image = request()->cover->store('images');
            $this->file()->create(['path' => $image, 'type' => 'cover']);
        }

        if (request()->hasFile('flag')) {
            $image = request()->flag->store('flags');
            $this->file()->create(['path' => $image, 'type' => 'flag']);
        }

        if (request()->hasFile('icon')) {
            $image = request()->icon->store('icons');
            $this->file()->create(['path' => $image, 'type' => 'icon']);
        }

        if (request()->hasFile('logo')) {
            $image = request()->logo->store('logos');
            $this->file()->create(['path' => $image, 'type' => 'logo']);
        }

        if (request()->hasFile('white_logo')) {
            $image = request()->white_logo->store('logos');
            $this->file()->create(['path' => $image, 'type' => 'white_logo']);
        }

        if (request()->hasFile('favicon')) {
            $image = request()->favicon->store('logos');
            $this->file()->create(['path' => $image, 'type' => 'favicon']);
        }

        if (request()->hasFile('file')) {
            $image = request()->file->store('files');
            $this->file()->create(['path' => $image, 'type' => 'file']);
        }

        if (request()->hasFile('footer_img')) {
            $image = request()->footer_img->store('images');
            $this->file()->create(['path' => $image, 'type' => 'footer_img']);
        }

        if (request()->hasFile('contact_img')) {
            $image = request()->contact_img->store('images');
            $this->file()->create(['path' => $image, 'type' => 'contact_img']);
        }

        if (request()->hasFile('breadcrumb')) {
            $image = request()->breadcrumb->store('images');
            $this->file()->create(['path' => $image, 'type' => 'breadcrumb']);
        }
    }

    public function updateFile()
    {
        if (request()->hasFile('image')) {
            //Delete the old image from the public images folder
            $file = $this->file()->where('type', 'image')->first();
            if (isset($file)) {
                if ($this->file && is_object($this->file)) {
                    Storage::delete($file->getRawOriginal('path'));
                    //Delete the old image from the images table
                    $file->delete();
                }
            }

            //Store the new image in public images folder & set the path in $image variable
            $image = request()->image->store('images');
            //Create a new user's image in images table
            $this->file()->create(['path' => $image, 'type' => 'image']);
        }

        if (request()->hasFile('cover')) {
            $file = $this->file()->where('type', 'cover')->first();
            if (isset($file)) {
                if ($this->file && is_object($this->file)) {
                    Storage::delete($file->getRawOriginal('path'));
                }
                $file->delete();
            }

            $image = request()->cover->store('images');
            $this->file()->create(['path' => $image, 'type' => 'cover']);
        }

        if (request()->hasFile('flag')) {
            $file = $this->file()->where('type', 'flag')->first();
            if (isset($file)) {
                if ($this->file && is_object($this->file)) {
                    Storage::delete($file->getRawOriginal('path'));
                }
                $file->delete();
            }

            $image = request()->flag->store('flags');
            $this->file()->create(['path' => $image, 'type' => 'flag']);
        }

        if (request()->hasFile('icon')) {
            $file = $this->file()->where('type', 'icon')->first();
            if (isset($file)) {
                if ($this->file && is_object($this->file)) {
                    Storage::delete($file->getRawOriginal('path'));
                }
                $file->delete();
            }

            $image = request()->icon->store('icons');
            $this->file()->create(['path' => $image, 'type' => 'icon']);
        }

        if (request()->hasFile('logo')) {
            $file = $this->file()->where('type', 'logo')->first();
            if (isset($file)) {
                if ($this->file && is_object($this->file)) {
                    Storage::delete($file->getRawOriginal('path'));
                }
                $file->delete();
            }

            $image = request()->logo->store('logos');
            $this->file()->create(['path' => $image, 'type' => 'logo']);
        }

        if (request()->hasFile('white_logo')) {
            $file = $this->file()->where('type', 'white_logo')->first();
            if (isset($file)) {
                if ($this->file && is_object($this->file)) {
                    Storage::delete($file->getRawOriginal('path'));
                }
                $file->delete();
            }

            $image = request()->white_logo->store('logos');
            $this->file()->create(['path' => $image, 'type' => 'white_logo']);
        }

        if (request()->hasFile('favicon')) {
            $file = $this->file()->where('type', 'favicon')->first();
            if (isset($file)) {
                if ($this->file && is_object($this->file)) {
                    Storage::delete($file->getRawOriginal('path'));
                }
                $file->delete();
            }

            $image = request()->favicon->store('logos');
            $this->file()->create(['path' => $image, 'type' => 'favicon']);
        }

        if (request()->hasFile('file')) {
            $file = $this->file()->where('type', 'file')->first();
            if (isset($file)) {
                if ($this->file && is_object($this->file)) {
                    Storage::delete($file->getRawOriginal('path'));
                }
                $file->delete();
            }

            $image = request()->file->store('files');
            $this->file()->create(['path' => $image, 'type' => 'file']);
        }

        if (request()->hasFile('footer_img')) {
            $file = $this->file()->where('type', 'footer_img')->first();
            if (isset($file)) {
                if ($this->file && is_object($this->file)) {
                    Storage::delete($file->getRawOriginal('path'));
                }
                $file->delete();
            }

            $image = request()->footer_img->store('images');
            $this->file()->create(['path' => $image, 'type' => 'footer_img']);
        }

        if (request()->hasFile('contact_img')) {
            $file = $this->file()->where('type', 'contact_img')->first();
            if (isset($file)) {
                if ($this->file && is_object($this->file)) {
                    Storage::delete($file->getRawOriginal('path'));
                }
                $file->delete();
            }

            $image = request()->contact_img->store('images');
            $this->file()->create(['path' => $image, 'type' => 'contact_img']);
        }

        if (request()->hasFile('breadcrumb')) {
            $file = $this->file()->where('type', 'breadcrumb')->first();
            if (isset($file)) {
                if ($this->file && is_object($this->file)) {
                    Storage::delete($file->getRawOriginal('path'));
                }
                $file->delete();
            }

            $image = request()->breadcrumb->store('images');
            $this->file()->create(['path' => $image, 'type' => 'breadcrumb']);
        }
    }

    public function deleteFile()
    {
        if ($this->file) {
            if ($this->file && is_object($this->file)) {
                Storage::delete($this->file->getRawOriginal('path'));
                //Storage::delete($this->file->path);
            }
            //Delete image from images table
            $this->file()->delete();
        }
    }

}
