<?php

namespace App\Http\Controllers;

use App\Models\Lkk;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{
    public function updateView($id)
    {
        return view('article.update', ['article' => Article::findOrFail($id)]);
    }
    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'thumbnail' => 'mimes:png,jpg,jpeg,webp',
            'description' => 'required'
        ]);

        if ($request->has('thumbnail')) {
            $file = $request->file('thumbnail');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $path = 'uploads/article/';
            $file->move($path, $filename);
            if (File::exists($article->image)) {
                File::delete($article->image);
            }
            $article->thumbnail = $path . $filename;
        }
        $article->title = $request->title;
        $article->thumbnail = $path . $filename;
        $article->content = $request->description;
        $article->save();
    }
    public function addView()
    {
        return view('article.add');
    }

    public function add(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'thumbnail' => 'required|mimes:png,jpg,jpeg,webp',
            'description' => 'required'
        ]);


        $file = $request->file('thumbnail');
        $extention = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extention;
        $path = 'uploads/article/';
        $file->move($path, $filename);


        Article::create([
            'title' => $request->title,
            'thumbnail' => $path . $filename,
            'lkk_id' => Auth::user()->lkk_id,
            'content' => $request->description,
        ]);
    }

    public function detail($id)
    {
        return view('article/detail', ['article' => Article::findOrFail($id)]);
    }
    public function show()
    {
        return view('article.index', ['articles' => Article::all()]);
    }
}
