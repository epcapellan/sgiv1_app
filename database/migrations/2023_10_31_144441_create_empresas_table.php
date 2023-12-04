<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('id_provincia')->default(2);
            $table->string('nombre', 100);
            $table->string('direccion',200)->default(null);
            $table->string('telefono',13);
            $table->string('telefono2',13)->default(null);
            $table->string('extension', 15)->default(null);
            $table->string('email', 100)->unique();
            $table->string('url',100)->default(null);
            $table->string('rnc',20)->default(null);
            $table->text('observacion')->default(null);
            $table->dateTime('fecha_registro');
            $table->enum('estatus',['Activa','Inactiva', 'Suspendida'])->default('Activa');
            $table->string('cambios')->default(null);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
