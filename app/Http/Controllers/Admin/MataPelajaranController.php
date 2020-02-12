<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\KelompokPelajaran;
use App\Model\Kurikulum;
use App\Model\MataPelajaran;
use Illuminate\Http\Request;

class MataPelajaranController extends Controller
{

    public function __construct()
    {
        $this->title = "mata-pelajaran";
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = $this->title;
        $data = MataPelajaran::orderBy('nama', 'ASC')->get();
        $kurikulum = Kurikulum::all();
        $kelompok = KelompokPelajaran::all();
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
        $data = new MataPelajaran();
        $data->kelompok_id = $request->get('kelompok_id');
        $data->kode_pelajaran = $request->get('kode_pelajaran');
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
        //
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
