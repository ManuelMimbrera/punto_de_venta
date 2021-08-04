<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCajaArqueoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caja_arqueo', function (Blueprint $table) {
            $table->id();
            $table->timestamp('fecha_inicial')->nullable();
            $table->timestamp('fecha_final')->nullable();
            $table->decimal('monto_apertura', $precision = 10, $scale = 3);
            $table->decimal('monto_cierre', $precision = 10, $scale = 3);
            $table->string('status', 200);
            $table->string('caja', 200);
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
        Schema::dropIfExists('caja_arqueo');
    }
}
