<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('orderNo');
            $table->float('amount');           
            $table->string('currencyCode')->nullable();
            $table->string('customerEmail')->nullable();
            $table->string('customerName')->nullable();
            $table->string('customerPhone')->nullable();
            $table->string('customerCountry')->nullable();
            $table->string('lang')->nullable(); 
            $table->string('status')->nullable(); 
            $table->string('note')->nullable();
            
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
        Schema::dropIfExists('orders');
    }
}
