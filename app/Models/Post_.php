<?php

namespace App\Models;

class Post
{
   private static $about_posts = [
    [
    "title" => "judul post pertama",
    "slug" => "mobile-legends",
    "author" => "farhanmaulana",
    "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum quas veritatis officia dignissimos accusamus illo nobis. Architecto ipsa sed illo possimus iste repudiandae velit ea, modi cupiditate itaque, molestiae ab provident fugit sunt praesentium error laborum sint repellendus dolore nulla commodi aspernatur, totam vitae eum? Magni, debitis fugit doloremque natus deserunt maiores assumenda, praesentium officia cupiditate omnis a dolore alias nam molestias saepe nulla aut ea, tempora illum cumque deleniti numquam? Doloremque blanditiis, quo illum a facilis nam maiores iusto."
],
[
"title" => "judul post kedua",
"slug" => "judul-post-kedua",
"author" => "Doddy ferdiansyah",
"body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere asperiores tempore maxime perspiciatis natus quos et, debitis similique qui. Harum necessitatibus sint soluta velit, debitis libero tempore ut magnam veritatis obcaecati doloremque delectus odit quisquam veniam molestias vel. Animi, aperiam. Quibusdam possimus dolore perspiciatis reiciendis, unde quia dolores repellendus. Nobis ad repellendus ratione fugiat. Ad nobis ut excepturi earum architecto sint dicta dignissimos accusamus sapiente a vero tenetur modi porro amet molestias ipsam beatae dolores sequi aperiam fuga enim quidem, corrupti perferendis? Iste, tenetur maiores? Laudantium, quaerat distinctio veniam repellendus sed beatae nihil animi maiores. Deserunt officiis id quidem iusto."
],
];
public static function all()
{ 
    return collect(self::$about_posts); 
}
public static function find($slug)

{
    $posts = static::all();
  
return $posts->firstWhere('slug', $slug);
}
}