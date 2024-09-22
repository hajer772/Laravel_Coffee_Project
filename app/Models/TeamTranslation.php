<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamTranslation extends Model
{
    use HasFactory;

    protected $table = 'team_translations';

    public $timestamps = false;

    protected $guarded = [];
}
