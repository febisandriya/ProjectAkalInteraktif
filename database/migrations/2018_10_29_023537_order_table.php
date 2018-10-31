<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('order', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nama');
          $table->string('email');
          $table->string('nohp');
          $table->string('alamat');
          $table->integer('product_id')->unsigned();
          $table->integer('qty');
          $table->integer('total');
          $table->string('invoice');        
          $table->boolean('status');
          $table->timestamps();

          $table->foreign('product_id')->references('id')->on('product')
               ->onDelete('cascade')
               ->onUpdate('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
