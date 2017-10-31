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
        User::create([
          'email'    => '11admin@shiyanlou.com',
          
          'nickname' => 'admin11',
          'is_admin' => 1,
          'password' => Hash::make('shiyanlou'),
        ]);
    }
}
