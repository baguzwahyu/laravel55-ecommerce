<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('CompanyName');
            // $table->string('ContactFName');
            // $table->string('ContactLName');
            $table->string('Address')->nullable();
            $table->string('City')->nullable();
            $table->string('State')->nullable();
            $table->string('PostalCode')->nullable();
            $table->string('Country')->nullable();
            $table->string('Phone')->nullable();
            $table->string('Fax')->nullable();
            $table->string('Email');
            $table->string('URL')->nullable();
            $table->string('PaymentMethods')->nullable();
            $table->string('DiscountType')->nullable();
            $table->string('TypeGoods')->nullable();
            $table->string('Notes')->nullable();
            $table->string('DiscountAvailable')->nullable();
            $table->string('CurrentOrder')->nullable();
            $table->string('Description');
            $table->string('SizeURL')->nullable();
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
        Schema::dropIfExists('suppliers');
    }
}
