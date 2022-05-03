<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    use HasFactory;
    protected $table = 'galleries';

    protected $fillable = [
        'title',
        'slug',
        'image',
        'status',
        'user_id'
    ];
}
