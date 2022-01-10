<?php

namespace App\Http\Controllers;

use App\Exports\CAExport;
use App\Models\CA;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class CAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ca = CA::all();
        return view('lay.catatan_anggota', compact('ca'));
        //
    }
    public function search(Request $request)
    {
        $date = $request->date_search;

        $ca = CA::where('check_in_date', $date)->get();
        return view('lay.catatan_anggota', compact('ca'));
    }
    public function export()
    {
        return Excel::download(new CAExport, 'customer.xlsx');
    }

    // public function export_view()
    // {
    //     return Excel::download(new CAView(), 'customer');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    // public function date_search(Request $request)
    // {
    //     $cari = $request->date_search;
    //     $posts = Post::latest
    //     return view('catatan_anggota', compact('posts'));
    // }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CA  $cA
     * @return \Illuminate\Http\Response
     */
    public function show(CA $cA)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CA  $cA
     * @return \Illuminate\Http\Response
     */
    public function edit(CA $cA)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CA  $cA
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CA $cA)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CA  $cA
     * @return \Illuminate\Http\Response
     */
    public function destroy(CA $cA)
    {
        //
    }
    public function checkIn(Request $request)
    {
        $fromDate = $request->fromDate;
        $toDate = $request->toDate;
        $name = $request->name;



        $checkIn = CA::where('check_in_date', '>=', $fromDate)->where('check_in_date', '<=', $toDate)->where('username', $name)->get();
        $filterTimeIn = $checkIn->where('time_in', '<=', '08:00:00')->count();
        $filterLate = $checkIn->where('time_in', '>', '08:00:00')->count();
        $filterTimeOut = $checkIn->where('time_out', '>=', '18:00:00')->count();
        $name = CA::where('username', $name)->first();

        return view('lay.hitung_cekin_hasil', compact('filterTimeIn', 'filterTimeOut', 'name', 'filterLate'));
    }
}
