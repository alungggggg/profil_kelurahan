<?php

namespace App\Http\Controllers;

use App\Models\Lkk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class lkkController extends Controller
{
    //lkk
    public function show(Request $request)
    {
        $data = [
            'request' => $request->search,
            'lkks' => Lkk::where('role_id', '=', 1)->paginate(5)
        ];
        if ($request->has('search')) {
            $data = [
                'lkks' => Lkk::where('nama_lembaga', 'LIKE', '%' . $request->search . '%')->where('role_id', '=', 1)->paginate(5),
                'request' => $request->search
            ];
        }
        return view('lkk.index', $data);
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
        $path = 'uploads/lkk/';
        $file->move($path, $filename);

        Lkk::create([
            'nama_lembaga' => $request->nama_lembaga,
            'logo' => $path . $filename,
            'description' => $request->description,
            'role_id' => 1
        ]);

        return redirect()->intended('/lkk')->with('message', 'Lkk berhasil dibuat!');
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
            'logo' => 'mimes:png,jpg,jpeg,webp|max:2048',
            'description' => 'required|min:50',
        ]);

        $lkk = lkk::findOrFail($id);

        if ($request->has('logo')) {
            $file = $request->file('logo');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $path = 'uploads/lkk/';
            $file->move($path, $filename);
            if (File::exists($lkk->logo)) {
                File::delete($lkk->logo);
            }
            $lkk->logo = $path . $filename;
        }
        $lkk->nama_lembaga = $request->nama_lembaga;
        $lkk->description = $request->description;
        $lkk->save();
        return redirect()->intended('/lkk')->with('message', 'Lkk berhasil diperbarui!');
    }
    public function delete($id)
    {
        $lkk = Lkk::findOrFail($id);
        if ($lkk->role_id != 1) {
            abort(404);
        }
        if (File::exists($lkk->logo)) {
            File::delete($lkk->logo);
        }
        $lkk->delete();
        return redirect()->intended('/lkk')->with('message', 'Lkk berhasil dihapus!');
    }
}
