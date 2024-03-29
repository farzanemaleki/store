<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Products',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->double('price');
            $table->double('old_price')->nullable();
            $table->text('description')->nullable();
            $table->string('product_id')->index();
            $table->string('thumbnail');
            $table->string('image');
            $table->integer('category')->default(1)->index();
            $table->string('discount')->nullable();
            $table->integer('count')->nullable();
            $table->string('size')->nullable();
            $table->string('weight')->nullable();
            $table->integer('rate')->default('1');
            $table->integer('status');
            $table->timestamps();
        }
        );
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
