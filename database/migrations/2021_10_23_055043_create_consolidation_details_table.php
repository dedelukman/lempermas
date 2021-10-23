<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsolidationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consolidation_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('consolidation_id')->references('id')->on('consolidations')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('product_id')->references('id')->on('products');
            $table->integer('purchase')->default(0);                      
            $table->integer('sale')->default(0);                      
            $table->integer('return')->default(0);                      
            $table->decimal('price')->default(0);
            $table->decimal('price_discount')->default(0);
            $table->decimal('discout')->default(0);
            $table->decimal('discount_value')->default(0);           
            $table->decimal('total')->default(0);
            $table->timestamps();
            $table->unique(["sale_id", "product_id"], 'sale_product_unique');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consolidation_details');
    }
}
