<?php

namespace App\Models;



class Post
{
    private static $blog_posts =
    [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}











Post::create([
    'title' => 'judul ke empat',
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, mollitia, sed illo nam aspernatur ut reiciendis similique fuga, explicabo recusandae dolorem',
    'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore quibusdam omnis blanditiis asperiores amet nobis sed modi iusto ea ipsam! Enim eveniet quae ipsum voluptas porro alias, minima provident placeat!</p><p> Aperiam iusto fugiat nostrum facilis ex saepe exercitationem ratione nisi quia magni odit distinctio nulla nam quos dolorem incidunt, minima labore officia expedita numquam ab est vero blanditiis praesentium? Reiciendis adipisci voluptatibus quisquam amet dolorum quia iusto quaerat deserunt rem, distinctio, aperiam quae ratione aliquid consequuntur repellat tempore iure consectetur suscipit ipsa ut nemo impedit rerum praesentium beatae.</p><p> Quod perspiciatis quia officiis repellendus, quae inventore sint deleniti corrupti doloremque excepturi, ad nobis! Ratione modi, quod beatae consequatur doloremque molestias odit nisi consequuntur architecto maiores dignissimos voluptatum nam earum sequi dolorum.</p>'
])