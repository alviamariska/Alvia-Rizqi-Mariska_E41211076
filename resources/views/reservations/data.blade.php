@extends('layout.main')

@section('content')
    <h3>Data Reservasi Pelanggan</h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('reservations/add') }}'">
                <i class="fa-solid fa-circle-plus"></i> Add New
            </button>
        </div>
        <div class="card-body">
            @if (session('msg'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Berhasil!</strong> {{ session('msg') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <table class="table table-sm table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Pelanggan</th>
                        <th>Nama</th>
                        <th>No Meja</th>
                        <th>Phone</th>
                        <th>More Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reservations as $row)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $row->id_pelanggan }}</td>
                            <td>{{ $row->Nama }}</td>
                            <td>{{ $row->no_meja }}</td>
                            <td>{{ $row->phone }}</td>
                            <td>
                                <button onclick="window.location='{{ url('reservations/' . $row->id_pelanggan) }}'"
                                    type="button" class="btn btn-sm btn-info" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <form onsubmit="retuen deleteData('{{ $row->id_pelanggan }}')" style="display: inline"
                                    method="POST" action="{{ url('reservations/' . $row->id_pelanggan) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" title="Hapus" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        function deleteData(Nama) {
            pesan = confirm(`Hapus Reservasi Atas Nama ${Nama}?`);
            if (pesan) return true;
            else return false;
        }
    </script>
@endsection
