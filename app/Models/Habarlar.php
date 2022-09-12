<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habarlar extends Model
{
    use HasFactory;
    protected $table = 'Habarlar';
    protected $primaryKey = 'category_id'; 
    protected $fillable =[
        'id',
        'habar_title',
        'habar_slug',
        'habar_description',
        'habar_image',
        'habar_status',
        'category_id',
    ];

    public function categories()
    {
        return $this->hasOne('App\Models\Categories', 'id');
    }
}
