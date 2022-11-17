<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        
// User::create([
// 'name' => 'Farhan Maulana',
// 'email' => 'maulana@gmail.com',
// 'password' => bcrypt('12345')
// ]);

// User::create([
//     'name' => 'Dody Ferdiansyah',
//     'email' => 'doddy@gmail.com',
//     'password' => bcrypt('12345')
//     ]);

User::factory(3)->create();

Category::create([
    'name' => 'Web Programming',
    'slug' => 'Web-programming'
]);

Category::create([
    'name' => 'Personal',
    'slug' => 'Personal'
]);

Post::factory(20)->create();

// Post::create([
//     'title' => 'Judul Pertama',
//     'slug' => 'Judul-pertama',
//     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo deserunt dicta blanditiis quis, voluptate',
//      'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo deserunt dicta blanditiis quis, voluptate, repudiandae quia dolor sed a ex consectetur, laudantium atque quisquam quae libero assumenda. Dignissimos, at inventore vitae repellendus et quis aut! Nesciunt cupiditate, similique tempora molestiae natus assumenda laboriosam sit excepturi eligendi labore commodi aperiam doloribus aliquid id, repellendus iure repellat itaque quae enim atque deserunt ducimus dolores, minus praesentium. Hic accusamus id, minima neque obcaecati quidem animi! Tempore modi omnis quis magnam beatae. Maiores praesentium odit rem! Cupiditate saepe inventore pariatur molestias iure illum autem? Dicta cumque eum quibusdam. Nihil eaque voluptate ullam vel excepturi.',
//     'category_id' => 1,
//     'user_id' =>1
//     ]);
     
//     Post::create([
//         'title' => 'Judul ke Dua',
//         'slug' => 'Judul-ke-dua',
//         'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo deserunt dicta blanditiis quis, voluptate',
//          'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo deserunt dicta blanditiis quis, voluptate, repudiandae quia dolor sed a ex consectetur, laudantium atque quisquam quae libero assumenda. Dignissimos, at inventore vitae repellendus et quis aut! Nesciunt cupiditate, similique tempora molestiae natus assumenda laboriosam sit excepturi eligendi labore commodi aperiam doloribus aliquid id, repellendus iure repellat itaque quae enim atque deserunt ducimus dolores, minus praesentium. Hic accusamus id, minima neque obcaecati quidem animi! Tempore modi omnis quis magnam beatae. Maiores praesentium odit rem! Cupiditate saepe inventore pariatur molestias iure illum autem? Dicta cumque eum quibusdam. Nihil eaque voluptate ullam vel excepturi.',
//         'category_id' => 1,
//         'user_id' =>1
//     ]);

//     Post::create([
//         'title' => 'Judul ke Tiga',
//         'slug' => 'Judul-ke-tiga',
//         'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo deserunt dicta blanditiis quis, voluptate',
//          'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo deserunt dicta blanditiis quis, voluptate, repudiandae quia dolor sed a ex consectetur, laudantium atque quisquam quae libero assumenda. Dignissimos, at inventore vitae repellendus et quis aut! Nesciunt cupiditate, similique tempora molestiae natus assumenda laboriosam sit excepturi eligendi labore commodi aperiam doloribus aliquid id, repellendus iure repellat itaque quae enim atque deserunt ducimus dolores, minus praesentium. Hic accusamus id, minima neque obcaecati quidem animi! Tempore modi omnis quis magnam beatae. Maiores praesentium odit rem! Cupiditate saepe inventore pariatur molestias iure illum autem? Dicta cumque eum quibusdam. Nihil eaque voluptate ullam vel excepturi.',
//         'category_id' =>2,
//         'user_id' =>1
//     ]);

//     Post::create([
//         'title' => 'Judul ke Empat',
//         'slug' => 'Judul-ke-empat',
//         'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo deserunt dicta blanditiis quis, voluptate',
//          'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo deserunt dicta blanditiis quis, voluptate, repudiandae quia dolor sed a ex consectetur, laudantium atque quisquam quae libero assumenda. Dignissimos, at inventore vitae repellendus et quis aut! Nesciunt cupiditate, similique tempora molestiae natus assumenda laboriosam sit excepturi eligendi labore commodi aperiam doloribus aliquid id, repellendus iure repellat itaque quae enim atque deserunt ducimus dolores, minus praesentium. Hic accusamus id, minima neque obcaecati quidem animi! Tempore modi omnis quis magnam beatae. Maiores praesentium odit rem! Cupiditate saepe inventore pariatur molestias iure illum autem? Dicta cumque eum quibusdam. Nihil eaque voluptate ullam vel excepturi.',
//         'category_id' =>2,
//         'user_id' =>2
//     ]);
    }
}
