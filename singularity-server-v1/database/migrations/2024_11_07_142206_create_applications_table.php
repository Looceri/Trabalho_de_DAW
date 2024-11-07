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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->comment('Usuário');
            $table->foreignId('vacancy_id')->constrained('vacancies')->onDelete('cascade')->comment('Vaga');
            $table->foreignId('file_id')->nullable()->constrained('files')->onDelete('set null')->comment('Arquivo');
            $table->boolean('status')->default(true)->comment('Status da aplicação');
            $table->date('application_date')->comment('Data de aplicação');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
