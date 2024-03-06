<?php

namespace App\Http\Controllers;

use App\Models\Lkk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class fkController extends Controller
{
    //
    public function show()
    {
        // dd(Lkk::where('role_id', '=', 2)->get());
        return view('fk.index', ['fks' => Lkk::where('role_id', '=', 2)->get()]);
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
            'role_id' => 2
        ]);
    }

    public function updateView($id)
    {
        $fk = Lkk::findOrFail($id);
        if ($fk->role_id != 2) {
            abort(404);
        }
        return view('fk.update', ['fk' => Lkk::findOrFail($id)]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_lembaga' => 'required',
            'logo' => 'mimes:png,jpg,jpeg,webp',
            'description' => 'required',
        ]);

        $fk = lkk::findOrFail($id);

        if ($request->has('logo')) {
            $file = $request->file('logo');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $path = 'uploads/lkk/';
            $file->move($path, $filename);
            if (File::exists($fk->image)) {
                File::delete($fk->image);
            }
            $fk->logo = $path . $filename;
        }
        $fk->nama_lembaga = $request->nama_lembaga;
        $fk->description = $request->description;
        $fk->save();
    }
    public function delete($id)
    {
        $fk = lkk::findOrFail($id);
        if ($fk->role_id != 2) {
            abort(404);
        }
        if (File::exists($fk->image)) {
            File::delete($fk->image);
        }
        $fk->delete();
    }
}
