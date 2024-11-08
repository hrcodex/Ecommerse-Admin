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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', length: 191);
            $table->text('description')->nullable();
            $table->text('content')->nullable();
            $table->text('video_link')->nullable();
            $table->string('status', length: 60)->default('published');
            $table->json('images')->nullable();
            $table->string('sku', length: 191)->nullable();
            $table->integer('order')->default(0);
            $table->integer('quantity')->default(0);
            $table->tinyInteger('allow_checkout_when_out_of_stock')->default(0);
            $table->tinyInteger('with_storehouse_management')->default(0);
            $table->tinyInteger('is_featured')->default(0);
            $table->bigInteger('brand_id')->nullable();
            $table->tinyInteger('is_variation')->default(0);
            $table->tinyInteger('sale_type')->default(0);
            $table->integer('price')->nullable();
            $table->integer('sale_price')->nullable();
            $table->integer('buy_price')->nullable();
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->double('length')->nullable();
            $table->json('atr_Colors')->nullable();
            $table->json('atr_Wide')->nullable();
            $table->json('atr_Size')->nullable();
            $table->json('atr_package')->nullable();
            $table->json('atr_Dimension')->nullable();
            $table->json('atr_Height')->nullable();
            $table->json('atr_Weight')->nullable();
            $table->json('atr_Pieces')->nullable();
            $table->json('atr_Names')->nullable();
            $table->json('atr_Material')->nullable();
            $table->double('height')->nullable();
            $table->double('weight')->nullable();
            $table->bigInteger('tax_id')->nullable();
            $table->bigInteger('views')->default(0);
            $table->string('stock_status', length: 191)->default('in_stock');
            $table->bigInteger('created_by_id')->default(0);
            $table->string('created_by_type', length: 191)->nullable();
            $table->string('image', length: 191)->nullable();
            $table->string('product_type', length: 191)->default('physical');
            $table->text('barcode')->nullable();
            $table->integer('cost_per_item')->nullable();
            $table->tinyInteger('generate_license_code')->default(0);
            $table->bigInteger('approved_by')->default(0);
            $table->integer('category_id')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
