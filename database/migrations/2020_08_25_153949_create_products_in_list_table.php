<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsInListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_in_list', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_barcode');
            $table->foreign('product_barcode')->references('barcode')->on('products');
            $table->string('android_user_email');
            $table->foreign('android_user_email')->references('email')->on('android_users');
            $table->string('expiration_date')->nullable();
            $table->string('note')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table('products_in_list', function($table){
            $table->dropForeign('products_in_list_product_barcode_foreign');
        });

        schema::table('products_in_list', function($table){
            $table->dropForeign('products_in_list_android_user_email_foreign');
        });

        Schema::dropIfExists('products_in_list');
    }
}
