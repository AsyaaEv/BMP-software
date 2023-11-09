<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'highlight', 'isi', 'uploader', 'category'];




    public function user()
    {
        return $this->belongsTo(User::class, 'email', 'uploader');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'kode_category', 'category');
    }
}
