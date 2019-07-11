<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_details', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->biginteger('purchase_id')->unsigned();
          $table->biginteger('product_id')->unsigned();
          $table->bigInteger('unit_meassure_id')->unsigned();
          $table->integer('quantity')->unsigned();
          $table->integer('total_price')->unsigned();
          $table->timestamps();
          $table->foreign('purchase_id')->references('id')->on('purchases')->onDelete('cascade')->onUpdate('cascade');;
          $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');;
          $table->foreign('unit_meassure_id')->references('id')->on('meassures')->onDelete('cascade')->onUpdate('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase_details');
    }
}
