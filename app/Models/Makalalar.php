<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makalalar extends Model
{
    use HasFactory;
    protected $table = 'Makalalar';
    protected $fillable = [
        'makala_title',
        'makala_slug',
        'makala_image',
        'makala_description',
        'makala_status',
    ];
}
