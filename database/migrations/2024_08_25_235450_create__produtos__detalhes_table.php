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
        Schema::create('_produtos__detalhes', function (Blueprint $table) {
            
            //colunas
            $table->id();
            $table->unsignedBigInteger('Produto_id');
            $table->float('Comprimeto', 8,2);
            $table->float('Largura', 8,2);
            $table->float('Altura', 8,2);
            $table->timestamps();

            //constrint
            $table->foreign('Produto_id')->references('id')->on('_produtos');
            $table->unique('Produto_id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_produtos__detalhes');
    }
};
