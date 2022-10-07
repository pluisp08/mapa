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
        Schema::create('facturacions', function (Blueprint $table) {
            $table->id();
            
            $table->float('cantidad',8,2);
            $table->float('base_imp',8,2);
            $table->float('igtf',8,2);
            $table->float('exento',8,2);
            $table->float('iva',8,2);
            $table->float('subtotal',8,2);
            $table->float('total',8,2);
            $table->timestamps();


            $table->foreignId('cliente_id')->constrained('clientes')
            ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturacions');
    }
};
