<?php

namespace App\Http\Controllers;

use App\Models\carouselImages;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class carouselController extends Controller
{
    //
    public function index()
    {
        return view('carousel.index', ['carousels' => carouselImages::paginate(10)]);
    }
    public function add(Request $request)
    {
        // dd($request);
        $request->validate([
            'img' => 'required|mimes:png,jpg,jpeg,webp|max:2048',
        ]);

        $file = $request->file('img');
        $extention = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extention;
        $path = 'uploads/carousel-image/';
        $file->move($path, $filename);

        carouselImages::create([
            'image' => $path . $filename,
        ]);
        return redirect()->intended('/carousel-image')->with('message', 'carousel image berhasil dibuat!');
    }
    public function updateView($id)
    {
        $carousel = carouselImages::findOrFail($id);
        return view('carousel.update', ['carousel' => $carousel]);
    }

    public function update(Request $request, $id)
    {
        // dd($request);
        $request->validate([
            'img' => 'required|mimes:png,jpg,jpeg,webp|max:2048',
        ]);

        $carousel =  carouselImages::findOrFail($id);

        $file = $request->file('img');
        $extention = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extention;
        $path = 'uploads/carousel-image/';
        $file->move($path, $filename);

        if (File::exists($carousel->image)) {
            File::delete($carousel->image);
        }
        $carousel->image = $path . $filename;
        $carousel->save();

        return redirect()->intended('/carousel-image')->with('message', 'carousel image berhasil perbaharui!');
    }
    public function delete($id)
    {
        $carousel = carouselImages::findOrfail($id);
        if (File::exists($carousel->image)) {
            File::delete($carousel->image);
        }
        $carousel->delete();

        return redirect()->intended('/carousel-image')->with('message', 'carousel berhasil dihapus!');
    }
}
