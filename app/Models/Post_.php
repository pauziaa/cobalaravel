<?php

namespace App\Models;

class Post 
{
   private static $blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Pauzia",
        "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum, odit fugiat suscipit pariatur quam omnis id 
        porro vel laborum sequi iusto at impedit nesciunt rerum commodi possimus perferendis. Omnis maxime recusandae ea iste ex, 
        officia consequuntur sit? Repellat dolor, sequi placeat aliquid omnis deserunt quasi, tempore porro, laudantium quod culpa! Atque nam laboriosam ex. Fuga eos corporis odio. Excepturi quia sunt reiciendis mollitia, vitae repudiandae cum consequuntur quo autem magni rem voluptate ad necessitatibus laudantium dolores nisi aperiam quidem reprehenderit."
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Cut Khaulah",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos obcaecati odio, delectus dolores ut voluptatibus non iusto incidunt aperiam a nihil, magni dolore quo suscipit quidem quod ab saepe vel ratione inventore quas. Quibusdam similique eius atque animi, omnis cum cumque illum laboriosam perferendis hic explicabo error mollitia placeat doloribus recusandae, voluptate eaque vero maiores aliquam. Pariatur, voluptates. Aut, ex dicta ratione soluta quam corporis nemo dolore maiores debitis ipsam asperiores voluptatem expedita nam dolor maxime quaerat iste autem delectus repellendus molestias! Fugiat laboriosam mollitia delectus quod non? Nemo a sapiente, vero nulla quas molestias qui perferendis atque quidem deserunt!"
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

