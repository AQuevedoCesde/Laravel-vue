<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Note;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        User::factory()->create([
            'email'=> 'andres@email.com',
            'password'=> bcrypt('123456')
        ]);

        Note::factory(30)->create();
    }
}
