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
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('owner_id');
            $table->string('title');
            $table->float('salary')->nullable()->comment('Salário oferecido');
            $table->date('submission_start_date');
            $table->date('submission_end_date');
            $table->integer('vacancies_count');
            $table->text('description');
            $table->boolean('status')->default(true);
            $table->timestamps();

            // Definindo a chave estrangeira
            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacancies');
    }
};
