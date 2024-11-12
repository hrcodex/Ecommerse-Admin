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
        Schema::create('order_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('name', length: 191);
            $table->string('phone', length: 20)->nullable();
            $table->string('email', length: 191)->nullable();
            $table->text('address')->nullable();
            $table->string('country', length: 60)->nullable();
            $table->string('district', length: 60)->nullable();
            $table->string('Divisions', length: 60)->nullable();
            $table->string('zip_code', length: 20)->nullable();
            $table->string('type', length: 20)->nullable()->default('shipping_address');
            $table->bigInteger('order_id');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_addresses');
    }
};
