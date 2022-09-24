<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tt_order_detail', function (Blueprint $table) {
            $table->id('order_detail_id');
            $table->bigInteger('order_id')->unsigned();
            //$table->foreign('id_user')->references('id_user')->on('users');
            $table->foreign('order_id')->references('order_id')->on('tt_order');
            $table->bigInteger('product_id')->unsigned();
            $table->foreign('product_id')->references('product_id')->on('tc_product');
            $table->integer('cantidad');
            $table->decimal('total', 15, 2)->nullable();
            $table->tinyinteger('status_id')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tt_order_detail');
    }
};
