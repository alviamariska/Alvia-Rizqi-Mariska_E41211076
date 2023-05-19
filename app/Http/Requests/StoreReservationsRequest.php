<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReservationsRequest extends FormRequest
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
            'txtid' => 'required|unique:reservations,id_pelanggan|min:13|max:13',
            'txtNama' => 'required',
            'txtMeja' => 'required|numeric',
            'txtPhone' => 'required|numeric',
        ];
    }

    public function messages(): array
{
    return [
        'txtid.required' => ':attribute tidak boleh kosong',
        'txtid.unique' => ':attribute Sudah ada di dalam tabel',
        'txtNama.required' => ':attribute tidak boleh kosong',
        'txtNama.unique' => ':attribute Sudah ada di dalam tabel',
        'txtMeja.required' => ':attribute tidak boleh kosong',
        'txtMeja.unique' => ':attribute Sudah ada di dalam tabel',
        'txtPhone.required' => ':attribute tidak boleh kosong',
        'txtPhone.unique' => ':attribute Sudah ada di dalam tabel',
    ];
}

public function attributes(): array
{
    return [
        'txtid' => 'ID Pelanggan',
        'txtNama' => 'Nama',
        'txtMeja' => 'No Meja',
        'txtPhone' => 'Nomor HP',
    ];
}
}
