<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralInfo extends Model
{
    use HasFactory;
    protected $table = 'general_infos';

    protected $fillable = [
        'name_info',
        'phone',
        'email',
        'location',
    ];
}
