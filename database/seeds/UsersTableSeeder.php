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
            'name' => 'Dr Akmal',
            'email' => 'drakmal@admin.com',
            'password' => bcrypt('password')
        ]);
        $user->save();
        $user->assignRole('student_affairs');
        $societ = \App\Society::find(1);
        $societ->users()->save($user);
        $societ->save();


        $us = User::create([
            'name' => 'CSS',
            'email' => 'css@admin.com',
            'password' => bcrypt('password')
        ]);
        $us->save();
        $us->assignRole('society_head');
        $society = \App\Society::find(1);
        $society->users()->save($us);
        $society->save();



        // comics

        $use = User::create([
            'name' => 'COMECS',
            'email' => 'comecs@admin.com',
            'password' => bcrypt('password')
        ]);
        $use->save();
        $use->assignRole('society_head');
        $society = \App\Society::find(2);
        $society->users()->save($use);
        $society->save();

        // comics

// ACM
        $acm = User::create([
            'name' => 'ACM',
            'email' => 'acm@admin.com',
            'password' => bcrypt('password')
        ]);
        $acm->save();
        $acm->assignRole('society_head');
        $society = \App\Society::find(3);
        $society->users()->save($acm);
        $society->save();

// ACM


// ieee
        $ieee = User::create([
            'name' => 'IEEE',
            'email' => 'ieee@admin.com',
            'password' => bcrypt('password')
        ]);
        $ieee->save();
        $ieee->assignRole('society_head');
        $society = \App\Society::find(4);
        $society->users()->save($ieee);
        $society->save();

// ieee



// dramatics
        $dramatics = User::create([
            'name' => 'DRAMATICS',
            'email' => 'dramatics@admin.com',
            'password' => bcrypt('password')
        ]);
        $dramatics->save();
        $dramatics->assignRole('society_head');
        $society = \App\Society::find(5);
        $society->users()->save($dramatics);
        $society->save();

// dramatics



// eventix
        $eventix = User::create([
            'name' => 'evetix',
            'email' => 'eventix@admin.com',
            'password' => bcrypt('password')
        ]);
        $eventix->save();
        $eventix->assignRole('society_head');
        $society = \App\Society::find(6);
        $society->users()->save($eventix);
        $society->save();

// eventix


    }




}