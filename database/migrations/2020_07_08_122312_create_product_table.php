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
            $table->string('barcode');
            $table->string('soort');
            $table->foreign('soort')->references('naam')->on('soort');
            $table->date('houdbaarheidsdatum');
            $table->string('notitie');
            $table->string('gebruiker_email')->nullable();
            $table->foreign('gebruiker_email')->references('email')->on('gebruiker');
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

        schema::table('product', function($table){
          $table->dropForeign('product_gebruiker_email_foreign');
        });

        Schema::dropIfExists('product');
    }
}
