@extends('layout.app')

@section('title', 'SPKBalita | Data Balita')

@push('addon-style')
    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
@endpush

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Balita</h1>
                    </div>
                    <div class="col-sm-6"></div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Data Jenjang</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                @if(auth()->user()->level == 'admin')
                                <a href="{{ url('/balita/create') }}" class="btn btn-info float-right mb-2">Tambah Data</a>
                                @endif
                                <table id="tableData" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center" rowspan="2">No</th>
                                            <th rowspan="2">Nama Balita</th>
                                            <th class="text-center" rowspan="2">Umur (bulan)</th>
                                            <th rowspan="2">Jenis Kelamin</th>
                                            <th class="text-center" rowspan="2">Berat Badan (Kg)</th>
                                            <th class="text-center" rowspan="2">Tinggi Badan (cm)</th>
                                            <th class="text-center" rowspan="2">Indeks Massa Tubuh (Kg/m<sup>2</sup>)</th>
                                            <th class="text-center" colspan="4">Nilai Antropometri</th>
                                        </tr>
                                        <tr>
                                            <th class="text-center">TB /U</th>
                                            <th class="text-center">BB /U</th>
                                            <th class="text-center">BB /TB</th>
                                            <th class="text-center">IMT /U</th>
                                            @if(auth()->user()->level == 'admin')
                                            <th class="text-right">Action</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($balita as $data)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td>{{ $data->orangtua->nama_balita }}</td>
                                                <td class="text-center">{{ $data->umur}}</td>
                                                <td>{{ $data->orangtua->jenis_kelamin }}</td>
                                                <td class="text-center">{{ $data->berat_badan }}</td>
                                                <td class="text-center">{{ $data->tinggi_badan }}</td>
                                                <td class="text-center">{{ $data->imt }}</td>
                                                <td class="text-center">
                                                    {{ $data->tbu }}
                                                    <p>{{ $data->status_tbu }}</p>
                                                </td>
                                                <td class="text-center">
                                                    {{ $data->bbu }}
                                                    <p>{{ $data->status_bbu }}</p>
                                                </td>
                                                <td class="text-center">
                                                    {{ $data->bbtb }}
                                                    <p>{{ $data->status_bbtb }}</p>
                                                </td>
                                                <td class="text-center">
                                                    {{ $data->imtu }}
                                                    <p>{{ $data->status_imtu }}</p>
                                                </td>
                                                @if(auth()->user()->level == 'admin')
                                                <td class="text-right">
                                                    <a href="{{ route('balita.edit', $data->id) }}" class="btn btn-warning"><i
                                                            class="nav-icon fas fa-edit"></i></a>
                                                    <form action="{{ route('balita.destroy', $data->id) }}" method="POST"
                                                        class="d-inline" onsubmit="return confirm('Yakin Hapus Data?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit" method="POST"><i
                                                                class="nav-icon fas fa-trash"></i></button>
                                                    </form>
                                                </td>
                                                @endif
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@push('addon-script')
<!-- DataTables  & Plugins -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
    $('#tableData').DataTable();
});
</script>
@endpush
