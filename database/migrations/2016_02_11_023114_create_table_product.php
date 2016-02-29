<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('price');
            $table->string('category_id');
            $table->string('type_id');
            $table->string('merk_id');
            $table->string('kondisi');
            $table->string('tags');
            $table->string('berat');
            $table->integer('see');
            $table->text('desc');
            $table->integer('stock');
            $table->integer('sell');
            $table->string('user_id');
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
        Schema::drop('product');
    }
}
