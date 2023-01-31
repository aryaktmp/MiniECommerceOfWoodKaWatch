<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guard = [];

    protected $table = 'tbl_categories';

    protected $fillable = [
        'name',
        'description',
    ];
}
