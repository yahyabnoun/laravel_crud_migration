<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;

class StagiareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $temp_now=new \DateTime();
        for ($i=0; $i < 4; $i++) { 
        DB::table('stagiaires')->insert([
            'nom' => Str::random(5),
            'prenom' => Str::random(5),
            'age' => rand(18, 60),
            'created_at'=>$temp_now->format("Y-m-d H:i:s"),
            'updated_at'=>$temp_now->format("Y-m-d H:i:s")
        ]);
       }
        
        
    }
}
