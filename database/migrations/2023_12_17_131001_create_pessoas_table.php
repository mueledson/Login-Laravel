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
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();

            $table->string('nome', 60)->unique();
            $table->string('cpf', 30)  ->unique();
            $table->string('telefone', 30)->unique();

            $table->float('capital', 10,2);
            $table->float('capital_atual', 10,2);

            $table->string('cidade', 50);
            $table->string('estado', 50);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoas');
    }
};