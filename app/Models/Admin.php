<?php

namespace App\Models;

use App\Traits\Files\HasFile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Laratrust\Traits\LaratrustUserTrait;

class Admin extends Authenticatable
{
    use HasFactory, HasFile, LaratrustUserTrait;

    protected $table = 'admins';
    public $timestamps = true;
    protected $guarded = [];
    protected $hidden = ['password', 'remember_token'];

    // accessors & Mutator start
    public function setPasswordAttribute($val)
    {
        if (!empty($val)) {
            $this->attributes['password'] = bcrypt($val);
        }
    }

    public function setFirstNameAttribute($val)
    {
        $this->attributes['first_name'] = ucwords($val);
    }

    public function setLastNameAttribute($val)
    {
        $this->attributes['last_name'] = ucwords($val);
    }
    // accessors & Mutator end

    //Scopes start
    public function getActive()
    {
        return $this->active == 1 ? __('words.active') : __('words.inactive');
    }

    public function getImageAttribute(){
        $image = $this->file()->first();
        return $image ? $image->path : asset('uploads/no-user.jpg');
    }
    //Scopes end
}
