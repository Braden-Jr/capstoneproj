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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('Brand');
            $table->integer('Size_1');
            $table->integer('Size_2');
            $table->integer('Size_3');
            $table->string('Gender');
            $table->string('Product_Name');
            $table->string('Description');
            $table->integer('Price');
            $table->string('Images');
            $table->string('stocks')[0];
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
        Schema::dropIfExists('products');
    }
};
