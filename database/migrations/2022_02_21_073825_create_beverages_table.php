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
        Schema::create('beverages', function (Blueprint $table) {
            $table->id();
            $table->integer('supplier_id');
            $table->integer('product_id');
            $table->integer('category_id');
            $table->double('quantity', 5, 2);
            $table->double('price_case', 10, 2);
            $table->double('price_solo', 10, 0);
            $table->date('date_expire');
            $table->integer('piece');
            $table->integer('barorder');
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
        Schema::dropIfExists('beverages');
    }
};
