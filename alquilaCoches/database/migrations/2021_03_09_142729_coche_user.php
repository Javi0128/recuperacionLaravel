<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CocheUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coche_users', function (Blueprint $table) {
            $table->unsignedBigInteger('coche_id');
            $table->unsignedBigInteger('user_id');
            $table->date('fecha_alquiler');
            $table->timestamps();

            $table->primary(['coche_id', 'user_id', 'fecha_alquiler']);
            $table->foreign('coche_id')->references('id')->on('coches');
            $table->foreign('user_id')->references('id')->on('users');
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
