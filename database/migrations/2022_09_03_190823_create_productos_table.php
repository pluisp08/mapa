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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->required();
            $table->float('costo_dolar', 8, 2)->nullable();
            $table->float('costo_bolivar', 8, 2)->nullable();
            $table->float('precio', 8, 2);
            $table->integer('impuesto_id');
            $table->string('marca')->nullable();
            $table->integer('grupo_id');
            $table->date('creado');
            $table->date('modificado');
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
        Schema::dropIfExists('productos');
    }
};
