<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Orcamento;


class OrcamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $quant = 100;
        $faker = \Faker\Factory::create('pt_BR');
        for($i=1;$i<=$quant;$i++) {
            
            Orcamento::create([
            'venda_id'  =>  $faker->numberBetween(0, 5),
            'produto_id'    =>  $faker->numberBetween(1, 100),
            'quantidade'    =>  $faker->numberBetween(1, 10),
            ]);
        };    
    }
}
