<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('naam');
            $table->string('barcode')->unique();
            $table->string('soort');
            $table->foreign('soort')->references('naam')->on('soort');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table('product', function($table){
          $table->dropForeign('product_soort_foreign');
        });

        Schema::dropIfExists('product');
    }
}
