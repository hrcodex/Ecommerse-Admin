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
        Schema::create('metas', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('title_slug')->nullable();
            $table->text('Keyword')->nullable();
            $table->string('meta_id', length: 100)->nullable();
            $table->integer('table_id')->nullable();
            $table->string('table_name', length: 100)->nullable();
            $table->text('Description')->nullable();
            $table->integer('other')->nullable();
            $table->string('status', length: 60)->default('published');
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metas');
    }
};
