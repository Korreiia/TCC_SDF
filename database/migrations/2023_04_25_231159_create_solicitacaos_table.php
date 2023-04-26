<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('solicitacaos', function (Blueprint $table) {
            $table->id();
            $table->string('nome',150);
            $table->string('telefone1',11);
            $table->string('telefone2',11)->nullable();
            $table->string('endereco',200)->nullable();
            $table->string('cpf',11);
            $table->string('email',200)->nullable();
            $table->string('curso',150)->nullable();
            $table->string('rm',10)->nullable();
            $table->string('descpedido',1000);
            $table->timestamps();
        });

        DB::statement("
        ALTER TABLE solicitacaos ADD COLUMN id_usuario BIGINT UNSIGNED; 

    ");

         DB::statement("
        ALTER TABLE solicitacaos ADD CONSTRAINT fk_usuario_id FOREIGN KEY (id_usuario) REFERENCES usuarios (id);
    ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitacaos');
    }
};
