<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderdetails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('orders_id')->unsigned();
            $table->integer('products_id')->unsigned();
            $table->string('OrderNumber')->nullable();
            $table->string('Price')->nullable();
            $table->string('Quantity')->nullable();
            $table->string('Discount')->nullable();
            $table->string('Total')->nullable();
            $table->string('IDSKU')->nullable();
            $table->string('Size')->nullable();
            $table->string('Color')->nullable();
            $table->string('Fulfilled')->nullable();
            $table->string('ShipDate')->nullable();
            $table->string('BillDate')->nullable();
            $table->foreign('products_id')->references('id')->on('products');
            $table->foreign('orders_id')->references('id')->on('orders');
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
        Schema::dropIfExists('orderdetails');
    }
}
