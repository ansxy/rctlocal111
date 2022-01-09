<?php

namespace App\Http\Controllers;

use App\Models\DA;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataAnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $da = DA::all();
        return view('lay.kelola_anggota', compact('da'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('lay.tambah_anggota');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'gender' => 'required',
            'serial_number' => 'required',
            'user_date' => 'required',
            'email' => 'required',
            'time_in' => 'required',

        ]);

        $da = new DA;

        $da->username = $request->get('username');
        $da->email = $request->get('email');
        $da->gender = $request->get('gender');
        $da->serial_number = $request->get('serial_number');
        $da->user_date = $request->get('user_date');
        $da->time_in = $request->get('time_in');
        $da->save();
        //
        return redirect('kelola_anggota');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $da = DA::find($id);
        return view('lay.edit_anggota', compact('da'));

        //
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
        $this->validate($request, [
            'username' => 'required',
            'gender' => 'required',
            'serial_number' => 'required',
            'user_date' => 'required',
            'time_in' => 'required',

        ]);

        $da = DA::find($id);
        $da->id = $request->get('id');
        $da->username = $request->get('username');
        $da->gender = $request->get('gender');
        $da->serial_number = $request->get('serial_number');
        $da->user_date = $request->get('user_date');
        $da->time_in = $request->get('time_in');
        $da->save();

        return redirect('kelola_anggota');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($da)
    {
        $da = DA::find($da);
        $da->delete();
        return redirect('kelola_anggota');
        //
    }
}
