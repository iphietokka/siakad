<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Model\Guru;
use App\User;

class GuruController extends Controller
{
    public function __construct()
    {
        $this->title = 'guru';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = $this->title;
        $data = Guru::all();
        return view('admin.' . $title . '.index', compact('title', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = $this->title;
        return view('admin.' . $title . '.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Guru();
        $data->nip = $request->get('nip');
        $data->nama = $request->get('nama');
        $data->jenis_kelamin = $request->get('jenis_kelamin');
        $data->tgl_lahir = $request->get('tgl_lahir');
        $data->tempat_lahir = $request->get('tempat_lahir');
        $data->agama = $request->get('agama');
        $data->alamat = $request->get('alamat');
        $data->telepon = $request->get('telepon');
        $data->email = $request->get('email');
        $data->image = $request->get('image');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_extension = $file->getClientOriginalName();
            $destination_path = public_path() . '/image/guru/';
            $filename = $file_extension;
            $request->file('image')->move($destination_path, $filename);
            $data->image = $filename;
        }

        if ($data->save()) {
            $users = new User();
            $users->name = $data->nama;
            $users->username = $data->nip;
            $users->email = $data->email;
            $users->role_id = 2;
            $users->status = 1;
            $users->password = bcrypt($request->get('password'));
            $users->save();

            return redirect()->route('guru')->with('success', 'Tambah Guru Berhasil');
        } else {
            return redirect()->back()->with('error', 'Terjadi Kesalahan!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = $this->title;
        $data = Guru::findOrFail($id);
        return view('admin.' . $title . '.show', compact('title', 'data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = $this->title;
        $data = Guru::findOrFail($id);
        return view('admin.' . $title . '.edit', compact('title', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $model = $request->all();
        $data = Guru::findOrFail($model['id']);
        $data->fill($request->except('image'));
        if ($request->hasFile('image')) {
            $fullPath = public_path("image/guru/{$data->image}");
            if (File::exists($fullPath)) {
                File::delete($fullPath);
            }
            $gambar = $request->file('image');
            $namaFile = $gambar->getClientOriginalName();
            $request->file('image')->move('image/guru', $namaFile);
            $data->image = $namaFile;
        }
        if ($data->save()) {
            return redirect()->route('guru')->with('success', 'Edit Guru Berhasil');
        } else {
            return redirect()->back()->with('error', 'Terjadi Kesalahan');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
