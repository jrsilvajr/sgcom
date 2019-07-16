<?php

use Illuminate\Database\Seeder;
use sgcom\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        User::create([
           'name'=>'José Raimundo Silva Santos',
            'email'=>'jrsilva@gmail.com',
            'password'=> bcrypt('12345678'),
        
        ]);
        
    }
}
