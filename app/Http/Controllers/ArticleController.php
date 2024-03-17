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
        $article->content = $request->description;
        $article->save();
        return redirect()->intended('/article')->with('message', 'Artikel berhasil perbarui!');
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
        return redirect()->intended('/article')->with('message', 'Artikel berhasil dibuat!');
    }

    public function detail($id)
    {
        return view('article/detail', ['article' => Article::findOrFail($id)]);
    }
    public function show(Request $request)
    {
        if (Auth::user()->role_id == 2) {
            $data = [
                'request' => $request->search,
                'articles' => Article::paginate(5)
            ];
            if ($request->has('search')) {
                $data = [
                    'articles' => Article::where('title', 'LIKE', '%' . $request->search . '%')->paginate(5),
                    'request' => $request->search
                ];
            }
        } else if (Auth::user()->role_id == 1) {
            $data = [
                'request' => $request->search,
                'articles' => Article::where('lkk_id', '=', Auth::user()->lkk_id)->paginate(5)
            ];
            if ($request->has('search')) {
                $data = [
                    'articles' => Article::where('lkk_id', '=', Auth::user()->lkk_id)->where('title', 'LIKE', '%' . $request->search . '%')->paginate(5),
                    'request' => $request->search
                ];
            }
        }

        return view('article.index', $data);
    }
}
