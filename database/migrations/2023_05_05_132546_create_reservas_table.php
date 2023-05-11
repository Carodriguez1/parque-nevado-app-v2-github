<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_reserva');
            $table->time('hora_reserva');
            $table->string('numero_personas', 50)->nullable();
            $table->string('mayores_18', 50)->nullable();
            $table->string('menores_18', 50)->nullable();
            $table->string('tipo_plan', 50)->nullable();
            $table->string('servicio_adicional', 100)->nullable();
            $table->string('valor_reserva', 100);
            $table->string('estado_pago', 100)->nullable();
            $table->foreignId('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
