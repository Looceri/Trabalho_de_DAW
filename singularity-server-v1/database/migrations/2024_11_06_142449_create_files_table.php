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
            $table->id();
            $table->string('name');                   // Original name of the file
            $table->string('path');                   // Storage path of the file
            $table->string('extension')->nullable();  // File extension (e.g., pdf, jpg)
            $table->unsignedBigInteger('size');       // File size in bytes
            $table->string('mime_type')->nullable();  // MIME type of the file (e.g., image/png)
            $table->foreignId('user_id')              // Reference to the user who uploaded
                ->constrained()
                ->onDelete('cascade');
            $table->timestamps();
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
