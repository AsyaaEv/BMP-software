<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('excerpt');
            $table->string('slug');
            $table->string('image')->default('/img/no_photo.png');
            $table->text('isi');
            $table->string('uploader');
            $table->foreign('uploader')->references('username')->on('users')->onDelete('cascade');
            $table->string('category');
            $table->foreign('category')->references('kode_category')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
