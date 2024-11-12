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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('code', length: 191)->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->string('shipping_method', length: 60)->default('default');
            $table->string('status', length: 60)->default('pending');
            $table->integer('amount')->nullable();
            $table->decimal('tax_amount')->nullable();
            $table->decimal('shipping_amount')->nullable();
            $table->text('description')->nullable();
            $table->string('coupon_code', length: 120)->nullable();
            $table->integer('discount_amount')->nullable();
            $table->integer('sub_total')->nullable();
            $table->tinyInteger('unconfirmed')->default(1);
            $table->tinyInteger('confirmed')->default(0);
            $table->tinyInteger('painding')->default(0);
            $table->tinyInteger('deliverd')->default(0);
            $table->tinyInteger('return')->default(0);
            $table->tinyInteger('return_accepted')->default(0);
            $table->bigInteger('payment_id')->nullable();
            $table->string('proof_file', length: 191)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
