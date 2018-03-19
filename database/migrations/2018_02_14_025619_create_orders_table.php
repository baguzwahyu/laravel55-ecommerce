<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('shippers_id')->unsigned();
            $table->integer('payments_id')->unsigned();
            $table->integer('members_id')->unsigned();
            $table->string('OrderNumber')->nullable();
            $table->string('OrderDate')->nullable();
            $table->string('ShipDate')->nullable();
            $table->string('RequiredDate')->nullable();
            $table->string('Freight')->nullable();
            $table->string('SalesTax')->nullable();
            $table->string('TransactStatus')->nullable();
            $table->string('ErrLoc')->nullable();
            $table->string('ErrMsg')->nullable();
            $table->string('Fulfilled')->nullable();
            $table->string('Delete')->nullable();
            $table->string('Paid')->nullable();
            $table->string('PaymentDate')->nullable();
            $table->timestamps();
            $table->foreign('shippers_id')->references('id')->on('shippers');
            $table->foreign('payments_id')->references('id')->on('payments');
            $table->foreign('members_id')->references('id')->on('members');
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
