<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->decimal('price');
            $table->decimal('discount')->min(0)->max(100)->defult(0);
            $table->integer('stock');
            $table->string('color');
            $table->string('size');
            $table->string('seller');
            $table->text('description');
            $table->string('additonal_information');
            $table->foreignId('seller_id')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
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
