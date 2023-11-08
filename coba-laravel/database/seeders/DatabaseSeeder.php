<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // User::create([
        //     'name' => 'leonardo yemi',
        //     'email' => 'leonardoyemi@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'beruanganeh',
        //     'email' => 'bberuanganeh@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();


        Category::create([
            'name' => 'web programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'web design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'judul pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'lorem ipsum pertama',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, fuga consectetur id laborum necessitatibus eveniet impedit, quibusdam sint voluptatibus magnam repellendus doloremque! Labore maxime tempore vero. Modi deserunt non animi labore, deleniti nulla magnam sapiente inventore, nemo porro hic voluptatibus consectetur assumenda libero neque praesentium sunt ex quos. Autem sapiente unde qui veritatis? Excepturi deserunt cumque suscipit dolorum pariatur. Accusantium velit neque nam, at necessitatibus eveniet iste earum placeat odit sapiente delectus, iure libero omnis, repudiandae id corporis dolorem illum dignissimos pariatur. Repellendus reprehenderit quaerat quas officiis repudiandae quidem aperiam corporis ea fugit, atque magnam quod ad repellat placeat provident, dolore perspiciatis molestiae! In adipisci distinctio quos ab quis, quisquam impedit eius ipsum natus tempora voluptatibus perspiciatis vero laudantium voluptate quam porro dolore inventore delectus optio ullam culpa quae. Corrupti ipsum omnis, harum saepe ipsam dolorem cumque possimus fugit sed tenetur suscipit vero reiciendis, minima provident recusandae nisi, impedit quia.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'judul Kedua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'lorem ipsum Kedua',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, fuga consectetur id laborum necessitatibus eveniet impedit, quibusdam sint voluptatibus magnam repellendus doloremque! Labore maxime tempore vero. Modi deserunt non animi labore, deleniti nulla magnam sapiente inventore, nemo porro hic voluptatibus consectetur assumenda libero neque praesentium sunt ex quos. Autem sapiente unde qui veritatis? Excepturi deserunt cumque suscipit dolorum pariatur. Accusantium velit neque nam, at necessitatibus eveniet iste earum placeat odit sapiente delectus, iure libero omnis, repudiandae dolore perspiciatis molestiae! In adipisci distinctio quos ab quis, quisquam impedit eius ipsum natus tempora voluptatibus perspiciatis vero laudantium voluptate quam porro dolore inventore delectus optio ullam culpa quae. Corrupti ipsum omnis, harum saepe ipsam dolorem cumque possimus fugit sed tenetur suscipit vero reiciendis, minima provident recusandae nisi, impedit quia.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'judul Ketiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'lorem ipsum Ketiga',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, fuga consectetur id laborum necessitatibus eveniet impedit, quibusdam sint voluptatibus magnam repellendus doloremque! Labore maxime tempore vero. Modi deserunt non animi labore, deleniti nulla magnam sapiente inventore, nemo porro hic voluptatibus consectetur assumenda libero neque praesentium sunt ex quos. Autem sapiente unde qui veritatis? Excepturi deserunt cumque suscipit dolorum pariatur. Accusantium velit neque nam, at necessitatibus eveniet iste earum placeat odit sapiente delectus, iure libero omnis, repudiandae dolore perspiciatis molestiae! In adipisci distinctio quos ab quis, quisquam impedit eius ipsum natus tempora voluptatibus perspiciatis vero laudantium voluptate quam porro dolore inventore delectus optio ullam culpa quae. Corrupti ipsum omnis, harum saepe ipsam dolorem cumque possimus fugit sed tenetur suscipit vero reiciendis, minima provident recusandae nisi, impedit quia.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'judul Keempat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'lorem ipsum Keempat',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, fuga consectetur id laborum necessitatibus eveniet impedit, quibusdam sint voluptatibus magnam repellendus doloremque! Labore maxime tempore vero. Modi deserunt non animi labore, deleniti nulla magnam sapiente inventore, nemo porro hic voluptatibus consectetur assumenda libero neque praesentium sunt ex quos. Autem sapiente unde qui veritatis? Excepturi deserunt cumque suscipit dolorum pariatur. Accusantium velit neque nam, at necessitatibus eveniet iste earum placeat odit sapiente delectus, iure libero omnis, repudiandae dolore perspiciatis molestiae! In adipisci distinctio quos ab quis, quisquam impedit eius ipsum natus tempora voluptatibus perspiciatis vero laudantium voluptate quam porro dolore inventore delectus optio ullam culpa quae. Corrupti ipsum omnis, harum saepe ipsam dolorem cumque possimus fugit sed tenetur suscipit vero reiciendis, minima provident recusandae nisi, impedit quia.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
