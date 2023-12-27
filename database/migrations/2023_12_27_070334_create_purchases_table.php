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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("vendor_id")->nullable();
            $table->unsignedBigInteger("product_id")->nullable();
            $table->decimal("price", 10, 2)->nullable();
            $table->decimal("quantity", 10, 2)->nullable();
            $table->decimal("total", 10, 2)->nullable();
            $table->dateTime("purchase_date")->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
