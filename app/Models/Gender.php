<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gender extends Model
{
    use HasFactory;

    const FERMALE = 1;
    const MALE = 2;

    public $table = 'genders';
    public $timestamps = false;
    protected $fillable = ['name'];
}
