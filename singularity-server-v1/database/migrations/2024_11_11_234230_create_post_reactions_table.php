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
        Schema::create('post_reactions', function (Blueprint $table) {
            $table->id();
            $table->string('user_id'); // Chave estrangeira para o usuário (como string, para compatibilidade com a tabela de usuários)
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Relacionamento com a tabela users
            $table->foreignId('post_id')->constrained('posts')->onDelete('cascade'); // Chave estrangeira para a tabela de posts
            $table->enum('reaction_type', ['like', 'love', 'wow', 'sad', 'angry'])->default('like'); // Tipo da reação
            $table->timestamps(); // Created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_reactions');
    }
};
