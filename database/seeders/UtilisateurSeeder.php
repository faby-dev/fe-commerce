<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UtilisateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'firstname' => 'admin',
            'adresse' => 'admin',
            'email' => 'admin@admin.net',
            'password' => Hash::make("admin"),
            "is_admin" => true
        ]);
    }
}
