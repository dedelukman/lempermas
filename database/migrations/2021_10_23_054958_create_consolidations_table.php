<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsolidationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consolidations', function (Blueprint $table) {
            $table->id();
            $table->string('no_transaction')->unique();
            $table->foreignId('supplier_id')->references('id')->on('suppliers');
            $table->string('description')->nullable();                       
            $table->decimal('sale')->default(0); 
            $table->decimal('discount')->default(0); 
            $table->decimal('payment')->default(0); 
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
        Schema::dropIfExists('consolidations');
    }
}
