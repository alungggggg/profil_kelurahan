<?php

namespace App\Http\Controllers;

use App\Models\Lkk;
use App\Models\Umkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class umkmController extends Controller
{

    public function show(Request $request)
    {
        $data = [
            'request' => $request->search,
            'umkms' => Umkm::paginate(10)
        ];
        if ($request->has('search')) {
            $data = [
                'umkms' => Umkm::where('nama_toko', 'LIKE', '%' . $request->search . '%')->paginate(10),
                'request' => $request->search
            ];
        }

        return view('/umkm/read', $data);
    }
    public function add(Request $request)
    {
        $request->validate([
            'namaToko' => 'required|unique:umkm,nama_toko',
            'image' => 'required|mimes:png,jpg,jpeg,webp|max:2048',
            'description' => 'required|min:10|max:1000',
            'location' => 'required',
            'nomor' => 'required|numeric',
            'instagram' => '',
            'facebook' => ''
        ]);

        $file = $request->file('image');
        $extention = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extention;
        $path = 'uploads/umkm/';
        $file->move($path, $filename);


        Umkm::create([
            'nama_toko' => $request->namaToko,
            'image' => $path . $filename,
            'description' => $request->description,
            'location' => $request->location,
            'nomor' => $request->nomor,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
        ]);
        return redirect()->intended('/umkm')->with('message', 'UMKM berhasil dibuat!');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'namaToko' => 'required',
            'image' => 'mimes:png,jpg,jpeg,webp|max:2048',
            'description' => 'required|min:10|max:1000',
            'location' => 'required',
            'nomor' => 'required',
            'instagram' => '',
            'facebook' => ''
        ]);
        $toko = Umkm::findOrFail($id);

        if ($request->has('image')) {

            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $path = 'uploads/umkm/';
            $file->move($path, $filename);

            if (File::exists($toko->image)) {
                File::delete($toko->image);
            }
            $toko->image = $path . $filename;
        }
        $toko->nama_toko = $request->namaToko;
        $toko->description = $request->description;
        $toko->location = $request->location;
        $toko->nomor = $request->nomor;
        $toko->instagram = $request->instagram;
        $toko->facebook = $request->facebook;

        $toko->save();

        return redirect()->intended('/umkm')->with('message', 'update berhasil!');
    }
    public function updateView($id)
    {
        $toko = Umkm::findOrFail($id);
        return view('umkm/update', ['toko' => $toko]);
    }
    public function delete($id)
    {
        $toko = Umkm::findOrFail($id);
        if (File::exists($toko->image)) {
            File::delete($toko->image);
        }
        $toko->delete();
        return redirect()->intended('/umkm')->with('message', 'delete berhasil!');
    }
    public function user(Request $request)
    {
        $data = [
            'request' => $request->search,
            'umkms' => Umkm::inRandomOrder()->limit(10)->get(),
            'lkks' => Lkk::where('role_id', '=', 1)->get(),
            'fks' => Lkk::where('role_id', '=', 2)->get(),
        ];
        if ($request->has('search')) {
            $data = [
                'umkms' => Umkm::where('nama_toko', 'LIKE', '%' . $request->search . '%')->paginate(10),
                'request' => $request->search
            ];
        }
        return view('/umkm', $data);
    }
    public function detail($nama_toko)
    {
        $data = [
            'umkm' => Umkm::where('nama_toko', '=', $nama_toko)->first(),
            'lkks' => Lkk::where('role_id', '=', 1)->get(),
            'fks' => Lkk::where('role_id', '=', 2)->get()
        ];
        return view('umkmDetail', $data);
    }
}
