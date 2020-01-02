<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    function __construct()
    {
        $this->title = 'sekolah';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = $this->title;
        $data = Sekolah::all();
        return view('admin.' . $title . '.index', compact('title', 'data'));
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
        $data = Sekolah::find($model['id']);
        if ($data->update($model)) {
            return redirect('admin/' . $this->title)->with('success', 'Sekolah Update');
        } else {
            return redirect('admin/' . $this->title)->with('success', 'Terjadi Kesalahan!!');
        }
    }
}
