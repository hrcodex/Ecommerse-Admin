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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', length: 100);
            $table->string('name_slug', length: 100);
            $table->text('image')->nullable();
            $table->integer('parent_id')->default(0);
            $table->text('description')->nullable();
            $table->string('status', length: 60)->default('published');
            $table->bigInteger('author_id')->nullable();
            $table->string('author_type')->nullable();
            $table->string('icon', length: 60)->nullable();
            $table->integer('other')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};