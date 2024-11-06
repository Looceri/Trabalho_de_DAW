<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();  // Chave primária auto-incrementada para o registro do arquivo

            $table->string('name')  // Nome original do arquivo (ex: 'curriculo.pdf')
                  ->comment('Nome original do arquivo enviado pelo usuário.');

            $table->string('path')  // Caminho onde o arquivo está armazenado (ex: 'storage/cv_files/curriculo.pdf')
                  ->comment('Caminho onde o arquivo está armazenado no servidor ou diretório de armazenamento.');

            $table->string('extension')->nullable()  // Extensão do arquivo (ex: '.pdf', '.jpg'). Nullable caso não fornecido.
                  ->comment('Extensão do arquivo (ex: .pdf, .jpg). Pode ser nulo caso não disponível.');

            $table->unsignedBigInteger('size')  // Tamanho do arquivo em bytes (ex: 10240 para um arquivo de 10 KB)
                  ->comment('Tamanho do arquivo em bytes.');

            $table->string('mime_type')->nullable()  // Tipo MIME do arquivo (ex: 'application/pdf'). Nullable caso não fornecido.
                  ->comment('Tipo MIME do arquivo (ex: application/pdf, image/jpeg). Pode ser nulo caso não fornecido.');

            // Chave estrangeira para a tabela 'users'. 'user_id' será nulo para permitir arquivos não associados a um usuário.
            $table->foreignId('user_id')->nullable()
                  ->constrained()  // Define a restrição de chave estrangeira para a tabela 'users'
                  ->onDelete('cascade')  // Se o usuário associado for deletado, todos os arquivos relacionados também serão deletados.
                  ->comment('Referência ao usuário que enviou o arquivo. Pode ser nulo se não associado a um usuário.');

            $table->timestamps();  // Adiciona automaticamente as colunas 'created_at' e 'updated_at' para rastrear quando o arquivo foi criado e atualizado pela última vez.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
