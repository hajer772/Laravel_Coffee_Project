<?php

namespace App\Traits\Contacts;

use App\Models\Contact;

trait HasContact
{
    public function contact()
    {
        return $this->morphMany(Contact::class,'contactable');
    }
}
