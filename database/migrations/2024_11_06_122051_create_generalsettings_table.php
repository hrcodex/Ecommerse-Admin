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
        Schema::create('generalsettings', function (Blueprint $table) {
            $table->id();
            $table->string('shop_name', length: 191)->nullable();
            $table->string('shop_owner_name', length: 191)->nullable();
            $table->string('company', length: 191)->nullable();
            $table->string('zip_code', length: 191)->nullable();
            $table->string('phone', length: 50)->nullable();
            $table->string('email', length: 100)->nullable();
            $table->string('currency', length: 100)->nullable();
            $table->string('business_email', length: 100)->nullable();
            $table->string('address', length: 191)->nullable();
            $table->string('country', length: 100)->nullable();
            $table->string('language', length: 100)->nullable();
            $table->string('police_station', length: 100)->nullable();
            $table->string('city', length: 100)->nullable();
            $table->string('tax_id')->nullable();
            $table->mediumInteger('best_selling_per_page')->default(8);
            $table->mediumInteger('shop_selling_per_page')->default(10);
            $table->tinyInteger('brand')->nullable()->default(1);
            $table->tinyInteger('best_selling')->nullable()->default(1);
            $table->tinyInteger('slider')->nullable()->default(1);
            $table->tinyInteger('shop_filter')->nullable()->default(1);
            $table->tinyInteger('category')->nullable()->default(1);
            $table->tinyInteger('home_top_bar')->nullable()->default(1);
            $table->tinyInteger('footer_scroller')->nullable()->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generalsettings');
    }
};
