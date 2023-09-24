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
     //Estrutura da tabela de Produtos.
     Schema::create('products', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('product_name');
        $table->text('description');
        $table->string('category');
        $table->string('unity');
        $table->decimal('price', 10, 2);
        $table->decimal('weight', 10, 2);
        $table->decimal('height', 10, 2);
        $table->decimal('width', 10, 2);
        $table->decimal('thickness', 10, 2);
        $table->string('color');
        $table->string('brand');
        $table->string('manufacturer');
        $table->string('supplier');
        $table->integer('stock_quantity');
        $table->timestamps();
        //O tipo de dado foi escolhido com base na necessidade do campo, pensando a nível de
        //arredondamentos e sensibilidade do dado. De acordo com a necessidade em produção
        //o tipo de dado po ser alterado. Em resumo esses foram os que achei mais coerentes.
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
