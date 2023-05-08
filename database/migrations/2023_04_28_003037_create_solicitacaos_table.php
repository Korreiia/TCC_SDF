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
            $table->string('descpedido', 1000);
            $table->string('quantidade', 1000);
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
