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
        Schema::create('inventarios', function (Blueprint $table) {
            $table->id();
            $table->string('estadofuncionamento',200);
            $table->date('dataentrada',);
            $table->string('descricao',500);
            $table->string('estadoconservacao',200)->nullable();
            $table->string('categoria',150)->nullable();
            $table->string('localizacao',200);
            $table->string('remetente',200);
            $table->string('quantidade',10000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventarios');
    }
};
