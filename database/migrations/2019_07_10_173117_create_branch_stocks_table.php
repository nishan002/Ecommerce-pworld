<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch_stocks', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->integer('chain_store_id')->unsigned();
          $table->bigInteger('purchase_details_id')->unsigned();
          $table->bigInteger('product_id')->unsigned();
          $table->integer('quantity')->unsigned();
          $table->timestamps();
          $table->foreign('purchase_details_id')->references('id')->on('purchase_details')->onDelete('cascade')->onUpdate('cascade');
          $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('branch_stocks');
    }
}
