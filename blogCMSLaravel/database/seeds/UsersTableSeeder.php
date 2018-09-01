<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $user = App\User::create([
           
           'name'      => 'pijush',

           'email'     => 'pijush@gmail.com',

           'password'  =>  bcrypt('pijush'),

           'admin'     => 1

        ]);

        App\Profile::create([
           
           'user_id'    => $user->id,

           'avatar'     => 'uploads/avatars/avatar.jpg',
            
           'about'      => 'Nulla quis lorem ut libero malesuada feugiat.',

           'facebook'   => 'facebook.com',

           'linkedin'   => 'linkedin.com'


        ]);


    }
}
