<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $table = 'Categories';
   
    protected $fillable = [
        'category_name',
        'category_slug',
        'category_status',
    ];

    public function habarlar(){
        return $this->hasMany('App\Models\Habarlar', 'category_id');
  }
  
}
