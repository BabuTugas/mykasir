<?php

namespace App\Http\Controllers;

use App\Models\DetailPembayaran;
use Illuminate\Http\Request;

class DetailPembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.detailpembayaran.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetailPembayaran  $detailPembayaran
     * @return \Illuminate\Http\Response
     */
    public function show(DetailPembayaran $detailPembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetailPembayaran  $detailPembayaran
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailPembayaran $detailPembayaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DetailPembayaran  $detailPembayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetailPembayaran $detailPembayaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetailPembayaran  $detailPembayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailPembayaran $detailPembayaran)
    {
        //
    }
}