<?php

use Illuminate\Database\Seeder;

use App\Entities\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Administrador',
            'email' => 'administrador@mail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
