<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        $users = [

        ['email' => 'third@gmail.com','name' => 'ahmed','email' => 'seconde@gmail.com','name' => 'mohamed', 'email' => 'five@gmail.com','name' => 'nour']

        ];
        DB::table('users')->insert($users);

    }
}
