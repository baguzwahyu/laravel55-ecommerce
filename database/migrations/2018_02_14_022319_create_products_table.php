<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('suppliers_id')->unsigned();
            $table->integer('categories_id')->unsigned();
            // $table->string('SKU');
            // $table->string('IDSKU');
            // $table->string('VendorProductID');
            $table->string('ProductName');
            $table->string('ProductDescription')->nullable();
            $table->string('QuantityPerUnit')->nullable();
            $table->string('UnitPrice')->nullable();
            // $table->string('MSRP');
            $table->string('AvailableZise')->nullable();
            $table->string('AvailableColors')->nullable();
            $table->string('Size')->nullable();
            $table->string('Color')->nullable();
            $table->string('Discount')->nullable();
            $table->string('UnitWeight')->nullable();
            $table->string('UnitsInStock')->nullable();
            $table->string('UnitsOnOrder')->nullable();
            $table->string('ReorderLevel')->nullable();
            $table->string('ProductAvailable')->nullable();
            $table->string('DiscountAvailable')->nullable();
            $table->string('CurrentOrder')->nullable();
            $table->string('Picture');
            $table->string('Ranking')->nullable();
            $table->string('Note')->nullable();
            $table->timestamps();
            $table->foreign('suppliers_id')->references('id')->on('suppliers');
            $table->foreign('categories_id')->references('id')->on('categories');
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
