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
        //Estrutura da tabela de Clientes.
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('birthdate');
            $table->string('cpf');
            $table->string('rg');
            $table->string('phone_number');
            $table->string('email');
            $table->string('postal_code');
            $table->string('address'); 
            $table->string('city'); 
            $table->string('state');       
            $table->timestamps();
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
