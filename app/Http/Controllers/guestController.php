<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Lkk;
use Illuminate\Http\Request;

class guestController extends Controller
{

    //
    public function home()
    {

        return view('home', [
            'lkks' => Lkk::where('role_id', '=', 1)->get(),
            'fks' => Lkk::where('role_id', '=', 2)->get(),
            'articles' => Article::orderBy('id', 'DESC')->limit(3)->get()
        ]);
    }
    public function lembaga()
    {
        return view('lembaga', [
            'lkks' => Lkk::where('role_id', '=', 1)->get(),
            'fks' => Lkk::where('role_id', '=', 2)->get()
        ]);
    }
    public function profil()
    {
        return view('profil', [
            'lkks' => Lkk::where('role_id', '=', 1)->get(),
            'fks' => Lkk::where('role_id', '=', 2)->get()
        ]);
    }
    public function berita()
    {
        return view('berita', [
            'lkks' => Lkk::where('role_id', '=', 1)->get(),
            'fks' => Lkk::where('role_id', '=', 2)->get(),
            'articles' => Article::orderBy('created_at', 'DESC')->paginate(5)
        ]);
    }
    public function beritaDetail($title)
    {
        $article = Article::where('title', '=', $title)->first();
        if ($article->count() === 0) {
            abort(404);
        }
        return view('beritaView', [
            'lkks' => Lkk::where('role_id', '=', 1)->get(),
            'fks' => Lkk::where('role_id', '=', 2)->get(),
            'article' => $article,
            'articles' => Article::inRandomOrder()->limit(3)->get()
        ]);
    }
    public function lembagaDetail($nama_lembaga)
    {
        $lembaga = Lkk::where('nama_lembaga', '=', $nama_lembaga)->first();
        if ($lembaga->count() === 0) {
            abort(404);
        }
        return view('lembagaView', [
            'lkks' => Lkk::where('role_id', '=', 1)->get(),
            'fks' => Lkk::where('role_id', '=', 2)->get(),
            'lembaga' => $lembaga,
            'articles' => Article::inRandomOrder()->limit(3)->get()
        ]);
    }
}
