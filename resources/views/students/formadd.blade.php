@extends('layout.main')

@section('content')
    <h3>Data Students</h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('students') }}'">
                Kembali
            </button>
        </div>
        <div class="card-body">
            @if (session('msg'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Berhasil!</strong> {{ session('msg') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
            <form method='POST' action="{{ url('students/') }}">
                @csrf
                <div class="row mb-3">
                    <label for="txtNIM" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control form-control-sm @error('txtNIM') is-invalid @enderror"
                            id="txtNIM" name="txtNIM" value="{{ old('txtNIM') }}">
                        @error('txtNIM')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtNama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control form-control-sm @error('txtNama') is-invalid @enderror"
                            id="txtNama" name="txtNama" value="{{ old('txtNama') }}">
                        @error('txtNama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtJurusan" class="col-sm-2 col-form-label">Jurusan</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control form-control-sm @error('txtJurusan') is-invalid @enderror"
                            id="txtJurusan" name="txtJurusan" value="{{ old('txtJurusan') }}">
                        @error('txtJurusan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-5">
                        <input type="email" class="form-control form-control-sm @error('txtEmail') is-invalid @enderror"
                            id="txtEmail" name="txtEmail" value="{{ old('txtEmail') }}">
                        @error('txtEmail')
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
                            id="txtPhone" name="txtPhone" value="{{ old('txtPhone') }}">
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
                            Simpan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
