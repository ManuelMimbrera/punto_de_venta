<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventass', function (Blueprint $table) {
            $table->id();
            $table->decimal('total', $precision = 8, $scale = 3);
            $table->decimal('recibido', $precision = 8, $scale = 3);
            $table->decimal('entregado', $precision = 8, $scale = 3);
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
        Schema::dropIfExists('ventass');
    }
}
