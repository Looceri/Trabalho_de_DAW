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
        Schema::table('files', function (Blueprint $table) {
            $table->text('reason')->nullable()->comment('Motivo para contratar o candidato');  // Novo campo para motivo
            $table->unsignedBigInteger('vacancy_id')->nullable()->comment('Referência à vaga a qual o arquivo está associado');

            // Define a chave estrangeira para vacancy_id
            $table->foreign('vacancy_id')
                ->references('id')
                ->on('vacancies')
                ->onDelete('set null');  // Caso a vaga seja excluída, o campo vacancy_id é definido como nulo
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('files', function (Blueprint $table) {
            // Primeiro, remova a chave estrangeira
            $table->dropForeign(['vacancy_id']);
            $table->dropColumn('vacancy_id');  // Remove a coluna vacancy_id
            $table->dropColumn('reason');  // Remove a coluna reason
        });
    }
};
