<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckoutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('checkout', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->timestamps();
          $table->string('dte');
          $table->string('recipent');
          $table->string('phone');
          $table->string('addr');
          $table->string('message');
          $table->string('instructions');
          $table->string('yphone');
          $table->string('status');
          $table->string('email');
          $table->string('identifier');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::dropIfExists('checkout');
    }
}
