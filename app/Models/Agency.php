<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    use HasFactory;

    /**
    * The attributes that are mass assignable.
    *
    * @var array<int, string>
    */
    protected $fillable = [
        'province',
        'city',
        'office_code',
        'office_name',
        'office_chief',
        'phone',
        'address',
        'lat',
        'lng',
        'lang',
    ];
}
