<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'society_head']);
        Role::create(['name' => 'president']);
        Role::create(['name' => 'vice_president']);
        Role::create(['name' => 'girls_head']);
        Role::create(['name' => 'general_secretary']);
        Role::create(['name' => 'general_manager']);
        Role::create(['name' => 'decor_head']);
        Role::create(['name' => 'security_head']);
        Role::create(['name' => 'media_head']);
        Role::create(['name' => 'marketing_head']);
        Role::create(['name' => 'registration_head']);
        Role::create(['name' => 'organiser']);
        Role::create(['name' => 'student_affairs']);

    }
}
