<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\KelompokPelajaran;

class KelompokPelajaranController extends Controller
{
    public function __construct()
    {
        $this->title = "kelompok-pelajaran";
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = $this->title;
        $data = KelompokPelajaran::all();
        return view('admin.' . $title . '.index', compact('title', 'data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new KelompokPelajaran();
        $data->jenis = $request->get('jenis');
        $data->nama = $request->get('nama');
        if ($data->save()) {
            return redirect()->route('kelompok-pelajaran')->with('success', ' Tamabah Kelompok Pelajaran Berhasil');
        } else {
            return redirect()->back()->with('error', 'Terjadi Kesalahan!!!');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = $request->all();
        $data = KelompokPelajaran::findOrFail($model['id']);
        if ($data->update($model)) {
            return redirect()->route('kelompok-pelajaran')->with('success', ' Update Kelompok Pelajaran Berhasil');
        } else {
            return redirect()->back()->with('error', 'Terjadi Kesalahan!!!');
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
        $data = KelompokPelajaran::find($id);
        if ($data->delete()) {
            return redirect()->route('kelompok-pelajaran')->with('success', 'Kelompok Pelajaran Terhapus');
        } else {
            return redirect()->back()->with('error', 'Terjadi Kesalahan!!!');
        }
    }
}
