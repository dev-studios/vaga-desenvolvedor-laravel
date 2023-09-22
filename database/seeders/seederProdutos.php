<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use app\Models\produtosModel;

class seederProdutos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produtos')->insert([
            'nome' => Str::random(10),
            'estoque' => '10',
            'preco' => '50',
            'descricao' => 'produto da loja',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
                    ]);
    }
}
