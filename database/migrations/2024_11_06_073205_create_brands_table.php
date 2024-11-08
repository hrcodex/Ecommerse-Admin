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
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('name', length: 191);
            $table->string('slug', length: 191);
            $table->mediumText('description')->nullable();
            $table->string('website')->nullable();
            $table->string('logo')->nullable();
            $table->string('status', length: 60)->default('published');
            $table->integer('order')->default(0);
            $table->integer('products')->default(0);
            $table->tinyInteger('is_featured')->default(0);
            $table->tinyInteger('admin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brands');
    }
};