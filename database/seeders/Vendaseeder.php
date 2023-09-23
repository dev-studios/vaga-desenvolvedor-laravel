<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use App\Models\Venda;

class VendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $quant = 100;
        $faker = \Faker\Factory::create('pt_BR');
        for($i=1;$i<=$quant;$i++) { 
            Venda::create ([ 
                'comprador_id'  =>  $faker->numberBetween(1, 10),
                'orcamento_id'    =>  $faker->numberBetween(1, 100),
                'total'    =>  $faker->randomFloat(2, 200, 5000),
                'status'    =>  $faker->numberBetween(0, 1),  
            ]);
        };
    }
}
