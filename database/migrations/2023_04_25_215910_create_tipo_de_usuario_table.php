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
        Schema::create('tipo_de_usuario', function (Blueprint $table) {
            $table->id();
            $table->string('nome',200);
            $table->timestamps();
        });

        DB::table('tipo_de_usuario')->insert([
            'nome' => 'admin',
        ]);

        DB::table('tipo_de_usuario')->insert([
            'nome' => 'comum',
        ]);

        DB::statement("
            ALTER TABLE usuarios ADD COLUMN id_tipo BIGINT UNSIGNED;
        ");

        DB::statement("
            ALTER TABLE usuarios ADD CONSTRAINT fk_tipo_id FOREIGN KEY (id_tipo) REFERENCES tipo_de_usuario (id);
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_de_usuario');
    }
};
