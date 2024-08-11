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
            $table->bigInteger('price');
            $table->string('image');
            $table->decimal('discount')->min(0)->max(100)->defult(0);
            $table->integer('stock');
            $table->integer('sold')->nullable()->default(0);
            $table->string('color');
            $table->string('name');
            $table->string('size')->nullable();
            $table->string('slug');
            // 0 no 1 accept
            $table->boolean('admin-acceptance')->default(0);
            // 0 show 1 hide
            $table->boolean('hide')->default(0);
            // $table->string('seller');
            $table->enum('status',['pending','accepted','rejected'])->default('pending');

            // $table->enum('status',['pending','accepted','rejected'])->default('pending');
            $table->text('description');
            $table->string('additonal_information');
            $table->foreignId('seller_id')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('category_id')->references('id')->on('categories')->cascadeOnDelete()->cascadeOnUpdate();
            // $table->foreignId('brand_id')->references('id')->on('brands')->cascadeOnDelete()->cascadeOnUpdate();
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
