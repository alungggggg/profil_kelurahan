<?php

namespace App\Http\Controllers;

use App\Models\Lkk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class lkkController extends Controller
{
    //
    public function show()
    {
        return view('lkk.index', ['lkks' => Lkk::all()]);
    }
    public function add(Request $request)
    {
        $request->validate([
            'nama_lembaga' => 'required',
            'logo' => 'required|mimes:png,jpg,jpeg,webp',
            'description' => 'required'
        ]);

        $file = $request->file('logo');
        $extention = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extention;
        $path = 'uploads/lkk/';
        $file->move($path, $filename);

        Lkk::create([
            'nama_lembaga' => $request->nama_lembaga,
            'logo' => $path . $filename,
            'description' => $request->description,
        ]);
    }
    public function updateView($id)
    {
        return view('lkk.update', ['lkk' => Lkk::findOrFail($id)]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_lembaga' => 'required',
            'logo' => 'mimes:png,jpg,jpeg,webp',
            'description' => 'required'
        ]);

        $lkk = lkk::findOrFail($id);

        if ($request->has('logo')) {
            $file = $request->file('logo');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $path = 'uploads/lkk/';
            $file->move($path, $filename);
            if (File::exists($lkk->image)) {
                File::delete($lkk->image);
            }
            $lkk->logo = $path . $filename;
        }

        $lkk->nama_lembaga = $request->nama_lembaga;
        $lkk->description = $request->description;

        $lkk->save();
    }
    public function delete($id)
    {
        $toko = lkk::findOrFail($id);
        if (File::exists($toko->image)) {
            File::delete($toko->image);
        }
        $toko->delete();
    }
}
