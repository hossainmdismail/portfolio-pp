<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Parsedown;

class BlogController extends Controller
{
    public function view($slug)
    {
        $blog = Post::where('slug', $slug)->first();
        $category = Category::get();
        if ($blog) {
            $related = Post::where('category_id', $blog->category_id)->get()->take(5);

            $markown = new Parsedown();
            $content = $markown->text($blog->content);
            return view('themes.default.pages.blog', [
                'blog' => $blog,
                'categories' => $category,
                'relateds' => $related,
                'content' => $content,
            ]);
        } else {
            return back();
        }
    }
}
