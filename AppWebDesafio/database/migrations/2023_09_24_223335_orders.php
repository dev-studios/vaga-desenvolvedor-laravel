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
     //Estrutura da tabela de Pedidos.
     Schema::create('orders', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedBigInteger('customer_id');
        $table->unsignedBigInteger('product_id');
        $table->date('negotiation_date');
        $table->decimal('unity_price', 10, 2);
        $table->integer('quantity');
        $table->decimal('total_amount', 10, 2);
        $table->char('status', 1)->default('A');
        $table->timestamps();
        //Foi definido A(aberto) como default para status pois assim que é feito o pedido
        //o mesmo fica em aberto até que seja pago ou cancelado.

        // Chaves estrangeiras
        $table->foreign('customer_id')->references('id')->on('customers');
        $table->foreign('product_id')->references('id')->on('products');
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
