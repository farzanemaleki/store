<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('link1');
            $table->string('Address_link1');
            $table->string('link2')->nullable();
            $table->string('Address_link2')->nullable();
            $table->string('link3')->nullable();
            $table->string('Address_link3')->nullable();
            $table->string('link4')->nullable();
            $table->string('Address_link4')->nullable();
            $table->string('link5')->nullable();
            $table->string('Address_link5')->nullable();
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
        Schema::dropIfExists('links');
    }
}
