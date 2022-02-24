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
        Schema::create('supplier_stocks', function (Blueprint $table) {
            $table->id();
            $table->integer('beverages_id');
            $table->integer('supplier_id');
            $table->integer('category_id');
            $table->double('quantity', 10, 2);
            $table->double('price_case', 10, 2);
            $table->double('price_solo');
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
        Schema::dropIfExists('supplier_stocks');
    }
};
