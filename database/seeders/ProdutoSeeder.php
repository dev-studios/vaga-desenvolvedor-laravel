<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use App\Models\Produto;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //DB::table('produtos')->insert([
        //    'nome' => Str::random(10),
        //    'estoque' => '10',
        //    'preco' => '50',
        //    'descricao' => 'produto da loja',
        //    'created_at' => Carbon::now(),
        //    'updated_at' => Carbon::now(),
        //            ]);
        
        $quant = 100;
        $faker = \Faker\Factory::create('pt_BR');
        for($i=1;$i<=$quant;$i++) { 
            Produto::create ([
                'nome' => Str::random(10),
                'estoque' => $faker->numberBetween(0, 50),
                'valor' => $faker->randomFloat(2, 5, 1500),
                'descricao' => 'produto da loja',
            ]);
        };
    }
}
