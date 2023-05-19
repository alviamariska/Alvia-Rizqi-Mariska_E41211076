@extends('layout.main')

@section('content')
    <h3>Edit Data Reservasi Pelanggan</h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('reservations') }}'">
                Kembali
            </button>
        </div>
        <div class="card-body">
            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
            <form method='POST' action="{{ url('reservations/'.$txtid) }}">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label for="txtid" class="col-sm-2 col-form-label">ID Pelanggan</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control-plaintext"
                            id="txtid" name="txtid" value="{{ $txtid }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtNama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control form-control-sm @error('txtNama') is-invalid @enderror"
                            id="txtNama" name="txtNama" value="{{ $txtNama }}">
                        @error('txtNama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtMeja" class="col-sm-2 col-form-label">No Meja</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control form-control-sm @error('txtMeja') is-invalid @enderror"
                            id="txtMeja" name="txtMeja" value="{{ $txtMeja }}">
                        @error('txtMeja')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtPhone" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control form-control-sm @error('txtPhone') is-invalid @enderror"
                            id="txtPhone" name="txtPhone" value="{{ $txtPhone }}">
                        @error('txtPhone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-5">
                        <button type="Submit" class="btn btn-sm btn-success">
                            Ubah
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
