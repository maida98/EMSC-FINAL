<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $user = new \App\User();
        // $user->name = 'Super Admin';
        // $user->email = 'admin@eventos.com';
        // $user->password = bcrypt('password');
        // $user->save();
        // $user->assignRole('society_head', 'president');
        // $society = \App\Society::find(1);
        // $society->users()->save($user);
        // $society->save();

        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        // Output: 54esmdr0qf
        $password = substr(str_shuffle($permitted_chars), 0, 6);
        $user = User::create([
            'name' => 'rafay',
            'email' => 'rafay@admin.com',
            'password' => bcrypt('password')
        ]);
        $user->save();
        $user->assignRole('student_affairs');
        $societ = \App\Society::find(1);
        $societ->users()->save($user);
        $societ->save();


        $us = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password')
        ]);
        $us->save();
        $us->assignRole('society_head');
        $society = \App\Society::find(1);
        $society->users()->save($us);
        $society->save();




        
    }

   
       
    
}
