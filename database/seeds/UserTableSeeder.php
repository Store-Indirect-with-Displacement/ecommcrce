<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Hassan Elsaied' ,
            'email' =>'hassanelsaied80@gmail.com',
            'password'=> bcrypt('12345678'),
            'isAdmin' => 1,
        ]);
    }
}
