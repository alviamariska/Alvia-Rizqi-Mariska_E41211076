<?php

namespace App\Http\Controllers;

use App\Models\Reservations;
use App\Http\Requests\StoreReservationsRequest;
use App\Http\Requests\UpdateReservationsRequest;

class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('reservations.data')->with([
            'reservations' => Reservations::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReservationsRequest $request)
    {
        $validate = $request->validated();

        $reservations = new Reservations;
        $reservations->id_pelanggan = $request->txtid;
        $reservations->nama = $request->txtNama;
        $reservations->no_meja = $request->txtMeja;
        $reservations->phone = $request->txtPhone;
        $reservations->save();

        return redirect('reservations')->with('msg','ID Pelanggan baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservations $reservations, $id_pelanggan)
    {
        $data = $reservations->find($id_pelanggan);
        return view('reservations.formedit')->with([
            'txtid' => $id_pelanggan,
            'txtNama' => $data->Nama,
            'txtMeja' => $data->no_meja,
            'txtPhone' => $data->phone,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Reservations $reservations)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReservationsRequest $request, Reservations $reservations,$id_pelanggan)
    {
        $data = $reservations->find($id_pelanggan);
        $data->nama = $request->txtNama;
        $data->no_meja = $request->txtMeja;
        $data->phone = $request->txtPhone;
        $data->save();

        return redirect('reservations')->with('msg','Data dengan nama '.$data->Nama.' berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservations $reservations, $id_pelanggan)
    {
        $data = $reservations->find($id_pelanggan);
        $data->delete();

        return redirect('reservations')->with('msg','Reservasi atas nama '.$data->Nama.' berhasil dihapus');
    }
}
