<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // DB::table('clientes')->insert([
       // 'nome' => Str::random(10),
       // 'email' => Str::random(10).'@gmail.com',
       // 'created_at' => Carbon::now(),
       // 'updated_at' => Carbon::now(),
       // ]);

       // $quant recebe a quantidade de vezes que vai executar a seed
        $quant = 100;

        $faker = \Faker\Factory::create('pt_BR');

        for($i=1;$i<=$quant;$i++) { 
            
            $nome = $faker->name();
            $nomeEmail = str_replace(' ','',$nome);
            
            Cliente::create([
            'nome' => $nome,
            'email' => $nomeEmail.'@'.$faker->freeEmailDomain(),
            ]);
        
        };
    }
}