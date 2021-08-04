<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddusuarioCajaArqueoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('caja_arqueo', function (Blueprint $table) {
            $table->bigInteger('id_usuario')->nullable();
            $table->foreign('id_usuario')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('caja_arqueo', function (Blueprint $table) {
            $table->bigInteger('id_usuario')->nullable();
        });

    }
}
