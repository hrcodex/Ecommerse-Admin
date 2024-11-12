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
        Schema::create('order_products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id');
            $table->integer('qty')->nullable();
            $table->integer('price')->nullable();
            $table->integer('tax_amount')->nullable();
            $table->bigInteger('product_id')->nullable();
            $table->string('product_name')->nullable();
            $table->string('product_image', length: 191)->nullable();
            $table->double('weight')->nullable()->default(0.00);
            $table->integer('restock_quantity')->nullable()->default(0);
            $table->string('product_type')->nullable()->default('physical');
            $table->string('atr_Colors', length: 100)->nullable();
            $table->string('atr_Wide', length: 100)->nullable();
            $table->string('atr_Size', length: 100)->nullable();
            $table->string('atr_package', length: 100)->nullable();
            $table->string('atr_Dimension', length: 100)->nullable();
            $table->string('atr_Height', length: 100)->nullable();
            $table->string('atr_Weight', length: 100)->nullable();
            $table->string('atr_Pieces', length: 100)->nullable();
            $table->string('atr_Names', length: 100)->nullable();
            $table->string('atr_Material', length: 100)->nullable();
            $table->string('code', length: 191)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_products');
    }
};
