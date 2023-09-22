<?php

namespace Database\Seeders;

use app\Models\clientesModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class seederClientes extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
        'nome' => Str::random(10),
        'email' => Str::random(10).'@gmail.com',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
        ]);
    }
}