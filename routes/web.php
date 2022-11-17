<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Models\Category;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PostController::class, 'index']);


Route::get('/about', function () {
    // $about_posts = [
    //     [
    //     "title" => "judul post pertama",
    //     "slug" => "judul-post-pertama",
    //     "author" => "farhanmaulana",
    //     "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum quas veritatis officia dignissimos accusamus illo nobis. Architecto ipsa sed illo possimus iste repudiandae velit ea, modi cupiditate itaque, molestiae ab provident fugit sunt praesentium error laborum sint repellendus dolore nulla commodi aspernatur, totam vitae eum? Magni, debitis fugit doloremque natus deserunt maiores assumenda, praesentium officia cupiditate omnis a dolore alias nam molestias saepe nulla aut ea, tempora illum cumque deleniti numquam? Doloremque blanditiis, quo illum a facilis nam maiores iusto."
    // ],
    // [
    // "title" => "judul post kedua",
    // "slug" => "judul-post-kedua",
    // "author" => "Doddy ferdiansyah",
    // "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere asperiores tempore maxime perspiciatis natus quos et, debitis similique qui. Harum necessitatibus sint soluta velit, debitis libero tempore ut magnam veritatis obcaecati doloremque delectus odit quisquam veniam molestias vel. Animi, aperiam. Quibusdam possimus dolore perspiciatis reiciendis, unde quia dolores repellendus. Nobis ad repellendus ratione fugiat. Ad nobis ut excepturi earum architecto sint dicta dignissimos accusamus sapiente a vero tenetur modi porro amet molestias ipsam beatae dolores sequi aperiam fuga enim quidem, corrupti perferendis? Iste, tenetur maiores? Laudantium, quaerat distinctio veniam repellendus sed beatae nihil animi maiores. Deserunt officiis id quidem iusto."
    // ],
    // ];
    
    return view('about', [
        "title" => "about",
    ]);
});


Route::get('/kategori', function () {
    return view('kategori', [
        "title" => "kategori"
    ]);
});

Route::get('/categories', function() {
    return view('categories', [
      'title' => 'Post Categories',
      'categories' => Category::all()
    ]);
});
// halaman single post
route::get('/{post:slug}', [PostController::class, 'show']);



Route::get('/about', [PostController::class, 'index']);
Route::get('/categories/{category:slug}', function(Category $category) {
  return view('about', [
     'title' => "post by Category : $category->name",
     'about' => $category->about->load('category'),
    ]);
});