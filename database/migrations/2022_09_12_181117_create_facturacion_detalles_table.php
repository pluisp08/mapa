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
        Schema::create('facturacion_detalles', function (Blueprint $table) {
            $table->id();
            $table->integer('facturacion_id');
            $table->integer('producto_id',8,2);
            $table->float('cantidad',8,2);
            $table->float('costo',8,2);
            $table->float('iva',8,2);
            $table->float('precio',8,2);
            $table->float('igtf',8,2);
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
        Schema::dropIfExists('facturacion_detalles');
    }
};
