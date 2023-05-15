<?php

namespace App\Http\Controllers; //ruta de acceso al controlador "PageController" debe estar instanciado en web.php

use App\Models\Post;
use Illuminate\Http\Request;  //esta clase de laravel esta opaca osea que no esta trabajando 

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function blog()
    {
        /**
         * para traer el primer registro de la tabla
         * $posts = Post::first();
         * 
         * para traer un registro en especifico
         * $posts = Post::find(29);
         * 
         * para traer todos los registros de la tabla
         * $posts = Post::get();
         * 
         * dd($posts);
         */

        $posts = Post::latest()->paginate();

        return view('blog', ['posts' => $posts]);
    }

    public function post(Post $post)
    {
        return view('post', ['post' => $post]);
    }
}
