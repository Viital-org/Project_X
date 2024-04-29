<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Profissionais', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 70);
            $table->foreignId('areaatuacao_id')->constrained('Atuaareas')->onDelete('cascade');
            $table->string('email', 40);
            $table->string('enderecoatuacao', 80);
            $table->string('localformacao', 60);
            $table->date('dataformacao');
            $table->string('descricaoperfil');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};