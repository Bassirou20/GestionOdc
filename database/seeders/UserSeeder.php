<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Providers\RoleServiceProvider;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Diallo',
            'prenom' => 'Kha Padding',
            'email' => 'KhaPadding@gmail.com',
            'password' => Hash::make('padding1'),
            'role_id' =>2,
            'telephone'=>'77665435287896',
            'adresse'=>'HLM grd yoff',

        ]);


    }


}
