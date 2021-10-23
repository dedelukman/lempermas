<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('no_transaction')->unique();
            $table->foreignId('customer_id')->references('id')->on('customers');
            $table->string('description')->nullable();
            $table->decimal('subtotal')->default(0);                 
            $table->decimal('discount')->default(0);                 
            $table->decimal('discount_value')->default(0);                 
            $table->decimal('total')->default(0);                 
            $table->string('payment_method')->default('CASH');                 
            $table->decimal('bayar')->default(0);                 
            $table->decimal('kembali')->default(0);                 
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
        Schema::dropIfExists('sales');
    }
}
