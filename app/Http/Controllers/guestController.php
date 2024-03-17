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
            'articles' => Article::all()->take(3)
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
}
