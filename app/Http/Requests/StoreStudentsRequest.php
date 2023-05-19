<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'txtNIM' => 'required|unique:students,NIM|min:9|max:9',
            'txtNama' => 'required',
            'txtJurusan' => 'required',
            'txtEmail' => 'required|email|unique:students,email',
            'txtPhone' => 'required|numeric',
        ];
    }

    public function messages(): array
{
    return [
        'txtNIM.required' => ':attribute tidak boleh kosong',
        'txtNIM.unique' => ':attribute Sudah ada di dalam tabel',
        'txtNama.required' => ':attribute tidak boleh kosong',
        'txtNama.unique' => ':attribute Sudah ada di dalam tabel',
        'txtJurusan.required' => ':attribute tidak boleh kosong',
        'txtJurusan.unique' => ':attribute Sudah ada di dalam tabel',
        'txtEmail.required' => ':attribute tidak boleh kosong',
        'txtEmail.unique' => ':attribute Sudah ada di dalam tabel',
        'txtPhone.required' => ':attribute tidak boleh kosong',
        'txtPhone.unique' => ':attribute Sudah ada di dalam tabel',
    ];
}

public function attributes(): array
{
    return [
        'txtNIM' => 'NIM',
        'txtNama' => 'Nama',
        'txtJurusan' => 'Jurusan',
        'txtEmail' => 'Email',
        'txtPhone' => 'Nomor HP',
    ];
}
}
