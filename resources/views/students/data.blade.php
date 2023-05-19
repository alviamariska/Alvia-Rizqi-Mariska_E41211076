@extends('layout.main')

@section('content')
    <h3>Data Students</h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('students/add') }}'">
                <i class="fa-solid fa-circle-plus"></i> Add New Data
            </button>
        </div>
        <div class="card-body">
            <table class="table table-sm table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $row)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $row->NIM }}</td>
                            <td>{{ $row->Nama }}</td>
                            <td>{{ $row->Jurusan }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->phone }}</td>
                            <td>
                                <button onclick="window.location='{{ url('students/' . $row->NIM) }}'" type="button"
                                    class="btn btn-sm btn-info" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
