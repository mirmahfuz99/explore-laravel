<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'catname'
    ];

    public function products(){

        // dd("inside_here");
        return $this->hasMany(Product::class, 'category_id', 'id');
    }

}
