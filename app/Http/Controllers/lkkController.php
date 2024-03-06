<?php

namespace App\Http\Controllers;

use App\Models\Lkk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class lkkController extends Controller
{
    //lkk
    public function show()
    {
        return view('lkk.index', ['lkks' => Lkk::where('role_id', '=', 1)->get()]);
    }
    public function add(Request $request)
    {
        $request->validate([
            'nama_lembaga' => 'required',
            'logo' => 'required|mimes:png,jpg,jpeg,webp',
            'description' => 'required',
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
            'role_id' => 1
        ]);
    }

    public function updateView($id)
    {
        $lkk = Lkk::findOrFail($id);
        if ($lkk->role_id != 1) {
            abort(404);
        }
        return view('lkk.update', ['lkk' => Lkk::findOrFail($id)]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_lembaga' => 'required',
            'logo' => 'mimes:png,jpg,jpeg,webp',
            'description' => 'required',
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
        $lkk = Lkk::findOrFail($id);
        if ($lkk->role_id != 1) {
            abort(404);
        }
        if (File::exists($lkk->image)) {
            File::delete($lkk->image);
        }
        $lkk->delete();
    }
}
