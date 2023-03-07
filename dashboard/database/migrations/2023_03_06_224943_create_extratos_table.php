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
        Schema::create('extratos', function (Blueprint $table) {
            $table->id();
                $table->date('lancamento');
                $table->string('categoria');
                $table->string('descricao');
                $table->string('tipo');
                //$table->enum('tipo', array('credito', 'debito'));
                $table->decimal('valor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('extratos');
    }
};
