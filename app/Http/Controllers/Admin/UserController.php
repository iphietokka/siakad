<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Model\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $this->title = "user";
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = $this->title;
        $data = User::all();
        $roles = Role::all();
        return view('admin.' . $title . '.index', compact('title', 'data', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new User();
        $data->name = $request->get('name');
        $data->username = $request->get('username');
        $data->email = $request->get('email');
        $data->password = bcrypt($request->get('password'));
        $data->role_id = $request->get('role_id');
        $data->status = $request->get('status');

        if ($data->save()) {
            return redirect()->route('user')->with('success', 'Tambah Siswa Berhasil');
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
        $data = User::find($model['id']);
        if ($request->password == '') {
            $input = $request->except('password');
        } else {
            $input = $request->all();
        }
        if (!$request->password == '') {
            $input['password'] = bcrypt($request->password);
        }

        if ($data->update($input)) {
            return redirect('admin/' . $this->title)->with('success', 'User Update!!');
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
