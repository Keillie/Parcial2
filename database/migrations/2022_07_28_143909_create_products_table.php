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
        Schema::create('tc_product', function (Blueprint $table) {
            $table->id('product_id');
            // $table->string('reference', 20);
            $table->string('tipo_producto');
            $table->longText('descripcion');
            $table->decimal('cantidad');
            $table->tinyinteger('status_id')->default(1);
            $table->decimal('price', 15, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tc_product');
    }
};
