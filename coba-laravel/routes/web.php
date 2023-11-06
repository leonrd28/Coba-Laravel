<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "leonardo yemi",
        "email" => "leonardoyemi@gmail.com",
        "image" => "gambar1.png"
    ]);
});




Route::get('/blog', function () {

    $blog_posts = [
        [
            "title" => "judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "leonardo yemi",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt saepe libero laborum soluta aliquid obcaecati nostrum quibusdam, nesciunt dolorum modi fuga delectus ipsam, aliquam ipsum cum aperiam sint eaque quidem. Ex quidem dolores eveniet quisquam possimus nemo, cumque architecto distinctio a laborum? Itaque consectetur necessitatibus eaque explicabo iste. Cum id laboriosam architecto, unde nam et consequatur dolores vitae provident quasi eveniet consequuntur a reiciendis laborum debitis iure perferendis repudiandae in? Iste, eligendi maiores deleniti neque quisquam deserunt. Non, quidem est.",
        ],
        [
            "title" => "judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Beruang aneh",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, mollitia, sed illo nam aspernatur ut reiciendis similique fuga, explicabo recusandae dolorem. Numquam hic tempora magni id? Quia possimus fugit harum minus dolorum aliquid quidem fuga quaerat delectus. Unde nisi optio nemo placeat quis molestias dicta voluptas, amet molestiae repellat illo atque ducimus labore soluta beatae ut. Sapiente consequuntur autem assumenda harum. Reprehenderit cumque suscipit voluptatibus optio dolor debitis numquam enim quae repellat. Error neque sed quam placeat explicabo, dignissimos, ipsam quibusdam eveniet id autem saepe sit? Iste, quas incidunt. Velit perspiciatis dolores error odio optio, assumenda labore alias saepe beatae eligendi earum nostrum officia facere magni veniam aperiam accusantium eveniet. Ut nulla aspernatur nemo illo quibusdam magni culpa, ipsa minus ea voluptatem rem rerum non dignissimos porro unde in blanditiis quidem nesciunt voluptate? Eius soluta, excepturi quos aperiam magni temporibus voluptate perspiciatis eveniet, velit blanditiis reiciendis facere, saepe officia earum? Ea adipisci consectetur sunt? Quo eius, sequi eveniet repellendus nobis debitis quae deserunt excepturi ad praesentium dolore aspernatur recusandae? Quisquam minus nesciunt ipsam unde a aliquam. Odit consequuntur accusantium harum laudantium nobis earum et, fuga officiis nisi neque officia exercitationem amet rerum incidunt excepturi illo repudiandae dignissimos quibusdam eveniet! Asperiores.",
        ],

    ];
    return view('posts', [
        "title" => "posts",
        "posts" => $blog_posts
    ]);
});


// halaman single routes
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "leonardo yemi",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt saepe libero laborum soluta aliquid obcaecati nostrum quibusdam, nesciunt dolorum modi fuga delectus ipsam, aliquam ipsum cum aperiam sint eaque quidem. Ex quidem dolores eveniet quisquam possimus nemo, cumque architecto distinctio a laborum? Itaque consectetur necessitatibus eaque explicabo iste. Cum id laboriosam architecto, unde nam et consequatur dolores vitae provident quasi eveniet consequuntur a reiciendis laborum debitis iure perferendis repudiandae in? Iste, eligendi maiores deleniti neque quisquam deserunt. Non, quidem est.",
        ],
        [
            "title" => "judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Beruang aneh",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, mollitia, sed illo nam aspernatur ut reiciendis similique fuga, explicabo recusandae dolorem. Numquam hic tempora magni id? Quia possimus fugit harum minus dolorum aliquid quidem fuga quaerat delectus. Unde nisi optio nemo placeat quis molestias dicta voluptas, amet molestiae repellat illo atque ducimus labore soluta beatae ut. Sapiente consequuntur autem assumenda harum. Reprehenderit cumque suscipit voluptatibus optio dolor debitis numquam enim quae repellat. Error neque sed quam placeat explicabo, dignissimos, ipsam quibusdam eveniet id autem saepe sit? Iste, quas incidunt. Velit perspiciatis dolores error odio optio, assumenda labore alias saepe beatae eligendi earum nostrum officia facere magni veniam aperiam accusantium eveniet. Ut nulla aspernatur nemo illo quibusdam magni culpa, ipsa minus ea voluptatem rem rerum non dignissimos porro unde in blanditiis quidem nesciunt voluptate? Eius soluta, excepturi quos aperiam magni temporibus voluptate perspiciatis eveniet, velit blanditiis reiciendis facere, saepe officia earum? Ea adipisci consectetur sunt? Quo eius, sequi eveniet repellendus nobis debitis quae deserunt excepturi ad praesentium dolore aspernatur recusandae? Quisquam minus nesciunt ipsam unde a aliquam. Odit consequuntur accusantium harum laudantium nobis earum et, fuga officiis nisi neque officia exercitationem amet rerum incidunt excepturi illo repudiandae dignissimos quibusdam eveniet! Asperiores.",
        ],

    ];

    $new_poast = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
