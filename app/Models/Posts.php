<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $table = 'Posts';
    protected $fillable =[
        'post_title',
        'post_slug',
        'post_description',
        'post_image',
        'post_status',
        'category_id',
    ];
}
