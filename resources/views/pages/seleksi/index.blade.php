@extends('layout.app')

@section('title', 'SPKBalita | Status Gizi Balita')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Status Gizi Balita</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                {{-- <a href="{{ url('/create') }}" class="btn btn-info float-right mb-2">Tambah Data</a> --}}
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h4>Nama Balita</h4>
                                        <h2>{{ $balita->orangtua->nama_balita }}</h2>
                                    </div>
                                    <div class="col-sm-4">
                                        <h4>Nama Ayah</h4>
                                        <h2>{{ $balita->orangtua->user->name }}</h2>
                                    </div>
                                    <div class="col-sm-4">
                                        <h4>Nama Ibu</h4>
                                        <h2>{{ $balita->orangtua->nama_ibu }}</h2>
                                    </div>
                                </div>
                                <hr>
                                <h4>Bobot Kriteria</h4>
                                <table class="table table-bordered table-hover">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="text-center">TB/U</th>
                                            <th class="text-center">BB/U</th>
                                            <th class="text-center">BB/TB</th>
                                            <th class="text-center">IMT/U</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">0.25</td>
                                            <td class="text-center">0.25</td>
                                            <td class="text-center">0.25</td>
                                            <td class="text-center">0.25</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <h4>Matriks awal</h4>
                                <table class="table table-bordered table-hover">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th rowspan="2">Nama Balita</th>
                                            <th colspan="4" class="text-center">Kriteria</th>
                                        </tr>
                                        <tr>
                                            <th class="text-center">TB /U</th>
                                            <th class="text-center">BB /U</th>
                                            <th class="text-center">BB /TB</th>
                                            <th class="text-center">IMT /U</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $balita->orangtua->nama_balita }}</td>
                                            <td class="text-center">
                                                {{ $balita->bobot_tbu }}
                                                <br>
                                                <small class="text-muted">{{ $balita->status_tbu }}</small>
                                            </td>
                                            <td class="text-center">
                                                {{ $balita->bobot_bbu }}
                                                <br>
                                                <small class="text-muted">{{ $balita->status_bbu }}</small>
                                            </td>
                                            <td class="text-center">
                                                {{ $balita->bobot_bbtb }}
                                                <br>
                                                <small class="text-muted">{{ $balita->status_bbtb }}</small>
                                            </td>
                                            <td class="text-center">
                                                {{ $balita->bobot_imtu }}
                                                <br>
                                                <small class="text-muted">{{ $balita->status_imtu }}</small>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <h4>Matriks Normalisasi</h4>
                                <table class="table table-bordered table-hover">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th rowspan="2">Nama Balita</th>
                                            <th colspan="4" class="text-center">Kriteria</th>
                                        </tr>
                                        <tr>
                                            <th class="text-center">TB /U</th>
                                            <th class="text-center">BB /U</th>
                                            <th class="text-center">BB /TB</th>
                                            <th class="text-center">IMT /U</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $balita->orangtua->nama_balita }}</td>
                                            <td class="text-center">{{ $normal_tbu }}</td>
                                            <td class="text-center">{{ $normal_bbu }}</td>
                                            <td class="text-center">{{ $normal_bbtb }}</td>
                                            <td class="text-center">{{ $normal_imtu }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <h2>Nilai Gizi : <span>{{ $nilaiV }}</span> </h2>
                                <hr>
                                <h2>Status Gizi : <span>{{ $statusGizi }}</span> </h2>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
    </div>
    </section>
    </div>

@endsection
@push('addon-script')
    <script>
        window.print();
    </script>
@endpush