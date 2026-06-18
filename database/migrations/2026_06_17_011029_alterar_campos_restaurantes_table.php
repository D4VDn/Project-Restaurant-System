<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('restaurantes', function (Blueprint $table) {
            $table->dropColumn([
                'endereco',
                'telefone',
                'avaliacao',
                'horario_funcionamento',
                'descricao',
            ]);
        });

        Schema::table('restaurantes', function (Blueprint $table) {
            $table->string('categoria')->after('nome');
            $table->decimal('preco', 8, 2)->after('categoria');
        });
    }

    public function down(): void
    {
        Schema::table('restaurantes', function (Blueprint $table) {
            $table->dropColumn(['categoria', 'preco']);
            $table->string('endereco')->nullable();
            $table->string('telefone')->nullable();
            $table->decimal('avaliacao', 2, 1)->nullable();
            $table->string('horario_funcionamento')->nullable();
            $table->text('descricao')->nullable();
        });
    }
};