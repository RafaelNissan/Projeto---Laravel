<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    //* inicia a tabela de produtos
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            //* campos do produto
            $table->string('name'); // nome do produto
            $table->text('description')->nullable(); // descrição (pode ser vazia)
            $table->decimal('price', 10, 2); // preço (10 dígitos, 2 decimais)
            $table->string('image')->nullable(); // caminho da foto

            $table->timestamps(); //* data de criação e atualização
        });
    }

    //* reverte a migração
    
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
