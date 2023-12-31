<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['kode_category', 'name_category'];

    public function post()
    {
        return $this->hasMany(Post::class, 'kode_category', 'category');
    }
}
