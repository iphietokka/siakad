<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Model\Siswa;
use App\User;
use App\Model\Kelas;

class SiswaController extends Controller
{
    public function __construct()
    {
        $this->title = 'siswa';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = $this->title;
        $data = Siswa::all();
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
        $kelas = Kelas::all();
        return view('admin.' . $title . '.create', compact('title', 'kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Siswa();
        $data->nipd = $request->get('nipd');
        $data->nisn = $request->get('nisn');
        $data->nama = $request->get('nama');
        $data->jenis_kelamin = $request->get('jenis_kelamin');
        $data->tgl_lahir = $request->get('tgl_lahir');
        $data->tempat_lahir = $request->get('tempat_lahir');
        $data->agama = $request->get('agama');
        $data->alamat = $request->get('alamat');
        $data->telepon = $request->get('telepon');
        $data->angkatan = $request->get('angkatan');
        $data->email = $request->get('email');
        $data->image = $request->get('image');
        $data->nama_ayah = $request->get('nama_ayah');
        $data->pekerjaan_ayah = $request->get('pekerjaan_ayah');
        $data->telp_ayah = $request->get('telp_ayah');
        $data->nama_ibu = $request->get('nama_ibu');
        $data->pekerjaan_ibu = $request->get('pekerjaan_ibu');
        $data->telp_ibu = $request->get('telp_ibu');
        $data->nama_wali = $request->get('nama_wali');
        $data->pekerjaan_wali = $request->get('pekerjaan_wali');
        $data->telp_wali = $request->get('telp_wali');
        $data->status_awal = $request->get('status_awal');
        $data->status_siswa = $request->get('status_siswa');
        $data->kelas_id = $request->get('kelas_id');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_extension = $file->getClientOriginalName();
            $destination_path = public_path() . '/image/siswa/';
            $filename = $file_extension;
            $request->file('image')->move($destination_path, $filename);
            $data->image = $filename;
        }

        if ($data->save()) {
            $users = new User();
            $users->name = $data->nama;
            $users->username = $data->nisn;
            $users->email = $data->email;
            $users->role_id = 3;
            $users->status = 1;
            $users->password = bcrypt($request->get('password'));
            $users->save();

            return redirect()->route('siswa')->with('success', 'Tambah Siswa Berhasil');
        } else {
            return redirect()->route('siswa')->with('error', 'Terjadi Kesalahan!!');
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
        $data = Siswa::find($id);
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
        $data = Siswa::findOrFail($id);
        $kelas = Kelas::all();
        return view('admin.' . $title . '.edit', compact('title', 'data', 'kelas'));
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
        $data = Siswa::find($model['id']);
        $data->fill($request->except('image'));
        if ($request->hasFile('image')) {
            $fullPath = public_path("image/siswa/{$data->image}");
            if (File::exists($fullPath)) {
                File::delete($fullPath);
            }
            $gambar = $request->file('image');
            $namaFile = $gambar->getClientOriginalName();
            $request->file('image')->move('image/siswa', $namaFile);
            $data->image = $namaFile;
        }
        if ($data->save()) {
            return redirect()->route('siswa')->with('success', 'Edit Siswa Berhasil');
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
