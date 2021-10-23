<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('category_id')->references('id')->on('categories');
            $table->foreignId('supplier_id')->references('id')->on('suppliers');
            $table->string('photo')->nullable();
            $table->string('description')->nullable();
            $table->decimal('price')->default(0);
            $table->decimal('price_discount')->default(0);
            $table->decimal('discout')->default(0);
            $table->decimal('discount_value')->default(0);
            $table->integer('stock_start')->default(0);
            $table->integer('purchase')->default(0);
            $table->integer('sale')->default(0);
            $table->integer('return')->default(0);
            $table->integer('stock_final')->default(0);
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
