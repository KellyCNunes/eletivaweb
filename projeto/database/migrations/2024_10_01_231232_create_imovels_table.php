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
        Schema::create('imovels', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('endereco');
            $table->decimal('valor', 10, 2);
            $table->string('tipo'); // Casa, apartamento, etc.
            $table->timestamps();
        });

        Schema::create('proprietarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('telefone');
            $table->string('email')->unique();
            $table->timestamps();
        });

        Schema::create('locatarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('telefone');
            $table->string('email')->unique();
            $table->timestamps();
        });

        Schema::create('contratos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('imovel_id')->constrained()->onDelete('cascade');
            $table->foreignId('proprietario_id')->constrained('proprietarios')->onDelete('cascade');
            $table->foreignId('locatario_id')->constrained('locatarios')->onDelete('cascade');
            $table->date('data_inicio');
            $table->date('data_fim');
            $table->timestamps();
        });
        
    }



    public function down(): void
    {
        Schema::dropIfExists('imovels');
        Schema::dropIfExists('proprietarios');
        Schema::dropIfExists('locatarios');
    }
};
