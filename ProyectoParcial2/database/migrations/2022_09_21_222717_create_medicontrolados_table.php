<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicontrolados', function (Blueprint $table) {
            $table->id();
            $table->string("nombre",255);
            $table->text("descripcion");
            $table->text('slug');
            $table->text('prescripto_para');
            $table->text('componentes');
            $table->integer("cantidad");
            $table->date("fecha_expiracion");
            $table->float("precio_unidad");
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
        Schema::dropIfExists('medicontrolados');
    }
};
