<?php

namespace App\Http\Controllers;

use App\Models\Lkk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class fkController extends Controller
{
    //
    public function show(Request $request)
    {
        $data = [
            'request' => $request->search,
            'fks' => Lkk::where('role_id', '=', 2)->paginate(5)
        ];
        if ($request->has('search')) {
            $data = [
                'fks' => Lkk::where('nama_lembaga', 'LIKE', '%' . $request->search . '%')->where('role_id', '=', 2)->paginate(5),
                'request' => $request->search
            ];
        }
        return view('fk.index', $data);
    }

    public function add(Request $request)
    {
        
        $request->validate([
            'nama_lembaga' => 'required|unique:lkk',
            'logo' => 'required|mimes:png,jpg,jpeg,webp|max:2048',
            'description' => 'required|min:50',
        ]);

        $file = $request->file('logo');
        $extention = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extention;
        $path = 'uploads/fk/';
        $file->move($path, $filename);

        Lkk::create([
            'nama_lembaga' => $request->nama_lembaga,
            'logo' => $path . $filename,
            'description' => $request->description,
            'role_id' => 2
        ]);
        return redirect()->intended('/fk')->with('message', 'forum kemasyarakatan berhasil dibuat!');

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
            'logo' => 'mimes:png,jpg,jpeg,webp|max:2048',
            'description' => 'required|min:50',
        ]);

        $fk = lkk::findOrFail($id);

        if ($request->has('logo')) {
            $file = $request->file('logo');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $path = 'uploads/fk/';
            $file->move($path, $filename);
            if (File::exists($fk->logo)) {
                File::delete($fk->logo);
            }
            $fk->logo = $path . $filename;
        }
        $fk->nama_lembaga = $request->nama_lembaga;
        $fk->description = $request->description;
        $fk->save();
        return redirect()->intended('/fk')->with('message', 'forum kemasyarakatan berhasil diupdate!');

    }
    public function delete($id)
    {
        $fk = lkk::findOrFail($id);
        if ($fk->role_id != 2) {
            abort(404);
        }
        if (File::exists($fk->logo)) {
            File::delete($fk->logo);
        }
        $fk->delete();

        return redirect()->intended('/fk')->with('message', 'forum kemasyarakatan berhasil dihapus!');

    }
}
