<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    protected $fillable = [
        'name', 'image', 'price', 'description', 'category_id'
    ];

    public function deleteImage(){
        Storage::delete($this->image);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
