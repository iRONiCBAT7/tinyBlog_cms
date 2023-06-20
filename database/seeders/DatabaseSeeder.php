<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use \App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();


         $user7 =  \App\Models\User::factory()->create([
            'name' => 'Noah ',
            'email' => 'noah@example.com',
            'password' => Hash::make('secret')
        ]);

        $user8 =  \App\Models\User::factory()->create([
            'name' => 'Yoda',
            'email' => 'yoda@example.com',
            'password' => Hash::make('password')
        ]);







       // $user5 =  \App\Models\User::factory()->create([
       //      'name' => 'Test User',
       //      'email' => 'ttest@example.com',
       //      'password' => Hash::make('abcdcd')
       //  ]);

       //  $user6 =  \App\Models\User::factory()->create([
       //      'name' => 'Test2 User',
       //      'email' => 'ttttst@example.com',
       //      'password' => Hash::make('abcdcd')
       //  ]);

       //  Post::create([
       //      'user_id' => $user5->id,
       //      'title' => 'title here',
       //      'content'=>'content here'
       //  ]);

       //   Post::create([
       //      'user_id' => $user6->id,
       //      'title' => 'title here',
       //      'content'=>'contenttttt here'
       //  ]);
    }
}
