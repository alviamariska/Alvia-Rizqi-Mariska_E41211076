<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Http\Requests\StoreStudentsRequest;
use App\Http\Requests\UpdateStudentsRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('students.data')->with([
            'students' => Students::all()
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
    public function store(StoreStudentsRequest $request)
    {
        $validate = $request->validated();

        $students = new Students;
        $students->NIM = $request->txtNIM;
        $students->nama = $request->txtNama;
        $students->jurusan = $request->txtJurusan;
        $students->email = $request->txtEmail;
        $students->phone = $request->txtPhone;
        $students->save();

        return redirect('students')->with('msg','NIM baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Students $students,$NIM)
    {
        $data = $students->find($NIM);
        return view('$students.formedit')->with([
            ''
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Students $students)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentsRequest $request, Students $students)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Students $students)
    {
        //
    }
}
