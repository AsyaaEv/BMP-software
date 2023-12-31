<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'excerpt', 'slug', 'image', 'isi', 'uploader', 'category'];




    public function user()
    {
        return $this->belongsTo(User::class, 'uploader', 'username');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category', 'kode_category');
    }
}
