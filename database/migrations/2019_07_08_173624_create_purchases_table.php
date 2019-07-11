<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('supplier_id')->nullable();
          $table->integer('voucher_no')->nullable();
          $table->integer('total_bill')->unsigned();
          $table->integer('bill_paid')->unsigned();
          $table->string('image')->nullable();
          $table->string('description')->nullable();
          $table->timestamps();
          $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchases');
    }
}
