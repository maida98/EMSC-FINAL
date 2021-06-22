<?php

use App\Society;
use Illuminate\Database\Seeder;

class SocietiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $society = new Society;
        $society->title = 'CSS';
        $society->description = 'CSS';
        $society->save();

        $society = new Society;
        $society->title = 'COMECS';
        $society->description = 'COMECS';
        $society->save();

        $society = new Society;
        $society->title = 'ACM';
        $society->description = 'ACM';
        $society->save();

        $society = new Society;
        $society->title = 'IEEE';
        $society->description = 'IEEE';
        $society->save();

        $society = new Society;
        $society->title = 'Dramatics';
        $society->description = 'Dramatics';
        $society->save();

        $society = new Society;
        $society->title = 'EVENTIX';
        $society->description = 'EVENTIX';
        $society->save();

        $this->creatUsers();
    }

    public function creatUsers(){
        $user = new \App\User();
        $user->name = 'Super Admin';
        $user->email = 'admin@eventos.com';
        $user->password = bcrypt('password');
        $user->save();
        $user->assignRole('society_head', 'president');
        $society = \App\Society::find(1);
        $society->users()->save($user);
        $society->save();
    }
}
