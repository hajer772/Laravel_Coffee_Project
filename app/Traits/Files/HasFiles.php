<?php

namespace App\Traits\Files;

use App\Models\File;
use Illuminate\Support\Facades\Storage;

trait HasFiles
{
    public function files()
    {
        return $this->morphMany(File::class, 'filable');
    }

    public function uploadFiles()
    {
        // upload images
        if (request()->has('images')) {
            foreach (request()->images as $image) {
                $path = $image->store('images');

                $this->files()->create(['path' => $path, 'type' => 'image']);

            }
        }

        // upload files
        if (request()->has('files')) {
            foreach (request()->file('files') as $file) {
                $path = $file->store('files');
                $this->files()->create(['path' => $path, 'type' => 'file']);
            }
        }


    }

    public function updateFiles()
    {
        // update images
        if (request()->has('images')) {
            foreach (request()->images as $image) {
                $file = $image->store('images');
                $this->files()->create(['path' => $file, 'type' => 'image']);
            }
        }

        // update files
        if (request()->has('files')) {
            foreach (request()->file('files') as $file) {
                $path = $file->store('files');
                $this->files()->create(['path' => $path, 'type' => 'file']);
            }
        }

        // delete files or images
        if (request()->has('deleted_files')) {

            foreach (request()->deleted_files as $image) {
                $image_path = public_path('uploads/');

                $img = File::findOrFail($image);
                if (\Illuminate\Support\Facades\File::exists($image_path)) {
                    Storage::delete($img->getRawOriginal('path'));
                }
//                \Illuminate\Support\Facades\File::delete($image_path . $img->path);
                $img->delete();
            }
        }

        if (request()->hasFile('logo')) {
            if ($this->file && is_object($this->file)) {
                Storage::delete($this->file->getRawOriginal('path'));
            }
            $this->files()->where('type','logo')->delete();
            $image = request()->logo->store('logos');
            $this->files()->create(['path' => $image, 'type' => 'logo']);
        }

        if (request()->hasFile('footer_img')) {
            if ($this->file && is_object($this->file)) {
                Storage::delete($this->file->getRawOriginal('path'));
            }
            $this->files()->where('type','footer_img')->delete();
            $image = request()->footer_img->store('images');
            $this->files()->create(['path' => $image, 'type' => 'footer_img']);
        }

        if (request()->hasFile('contact_img')) {
            if ($this->file && is_object($this->file)) {
                Storage::delete($this->file->getRawOriginal('path'));
            }
            $this->files()->where('type','contact_img')->delete();
            $image = request()->contact_img->store('images');
            $this->files()->create(['path' => $image, 'type' => 'contact_img']);
        }
    }

    public function deleteFiles()
    {
        foreach ($this->files as $file) {
            Storage::delete($file->getRawOriginal('path'));
        }

        //Delete image from images table
        $this->files()->delete();
    }
}
