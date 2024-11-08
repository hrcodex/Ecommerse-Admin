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
        Schema::create('meta_management', function (Blueprint $table) {
            $table->id();
            $table->text('meta_start')->nullable();
            $table->text('meta_end')->nullable();
            $table->text('body_start')->nullable();
            $table->string('status', length: 60)->default('published');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meta_management');
    }
};
