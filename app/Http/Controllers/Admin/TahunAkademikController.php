<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Akademik;

class TahunAkademikController extends Controller
{
    public function __construct()
    {
        $this->title = "akademik";
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = $this->title;
        $data = Akademik::all();
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
        $data = new Akademik();
        $data->nama = $request->get('nama');
        $data->status = $request->get('status');

        if ($data->save()) {
            return redirect()->route('akademik')->with('success', 'Tambah Akademik Berhasil');
        } else {
            return redirect()->back()->with('error', 'Terjadi Kesalahan!!');
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
        $data = Akademik::find($model['id']);

        if ($data->update($model)) {
            return redirect('admin/' . $this->title)->with('success', 'Akademik Update!!');
        } else {
            return redirect('admin/' . $this->title)->with('error', 'Something Wrong!!');
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
