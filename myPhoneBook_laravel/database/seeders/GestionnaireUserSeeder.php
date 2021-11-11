<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class GestionnaireUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         User::create([
            'name' => 'gestionnaire',
            'email' => 'gestionnaire@gmail.com',
            'password' => 'gestionnaire',
        ]);
    }
}
