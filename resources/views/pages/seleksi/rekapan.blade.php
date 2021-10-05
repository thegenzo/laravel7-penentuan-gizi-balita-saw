@extends('layout.app-cetak')

@section('title', 'SPKBalita | Rekapan Status Gizi Balita')

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
                                <h3 class="card-title">Rekapan Status Gizi Balita</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <h4 class="text-center">Persentase Status Gizi Balita</h4>
                                <div class="row">
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-4">
                                        <div style="width:500px; height:500px;">
                                            <canvas id="statusGizi"></canvas>
                                        </div>
                                    </div>
                                    <div class="col-sm-4"></div>
                                </div>
                                <hr>
                                <div class="row">
                                    <table class="table table-bordered table-hover">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th>Nama Balita</th>
                                                <th class="text-center">Umur (bulan)</th>
                                                <th>Nama Ayah</th>
                                                <th class="text-center">Status Gizi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($balita as $data)
                                                <tr>
                                                    <td class="text-center">{{ $loop->iteration }}</td>
                                                    <td>{{ $data->orangtua->nama_balita }}</td>
                                                    <td class="text-center">{{ $data->umur }}</td>
                                                    <td>{{ $data->orangtua->user->name }}</td>
                                                    @if ($nilaiV[$data->orangtua->nama_balita] <= 0.25)
                                                    <td class="text-center">Gizi Buruk</td>
                                                    @elseif ($nilaiV[$data->orangtua->nama_balita] > 0.26 && $nilaiV[$data->orangtua->nama_balita] <= 0.74)
                                                    <td class="text-center">Gizi Kurang</td>
                                                    @else
                                                    <td class="text-center">Gizi Baik</td>
                                                    @endif
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
                                            <th rowspan="2" class="text-center">No</th>
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
                                        @foreach ($balita as $data)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $data->orangtua->nama_balita }}</td>
                                            <td class="text-center">
                                                {{ $data->bobot_tbu }}
                                                <br>
                                                <small class="text-muted">{{ $data->status_tbu }}</small>
                                            </td>
                                            <td class="text-center">
                                                {{ $data->bobot_bbu }}
                                                <br>
                                                <small class="text-muted">{{ $data->status_bbu }}</small>
                                            </td>
                                            <td class="text-center">
                                                {{ $data->bobot_bbtb }}
                                                <br>
                                                <small class="text-muted">{{ $data->status_bbtb }}</small>
                                            </td>
                                            <td class="text-center">
                                                {{ $data->bobot_imtu }}
                                                <br>
                                                <small class="text-muted">{{ $data->status_imtu }}</small>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <hr>
                                <h4>Matriks Normalisasi</h4>
                                <table class="table table-bordered table-hover">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th rowspan="2" class="text-center">No</th>
                                            <th rowspan="2">Nama Balita</th>
                                            <th colspan="6" class="text-center">Kriteria</th>
                                        </tr>
                                        <tr>
                                            <th class="text-center">TB /U</th>
                                            <th class="text-center">BB /U</th>
                                            <th class="text-center">BB /TB</th>
                                            <th class="text-center">IMT /U</th>
                                            <th rowspan="2" class="text-center">Nilai Gizi</th>
                                            <th rowspan="2" class="text-center">Status Gizi</th>
                                        </tr>
                                        <tr>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($balita as $data)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $data->orangtua->nama_balita }}</td>
                                            <td class="text-center">{{ $normal_tbu[$data->orangtua->nama_balita] }}</td>
                                            <td class="text-center">{{ $normal_bbu[$data->orangtua->nama_balita] }}</td>
                                            <td class="text-center">{{ $normal_bbtb[$data->orangtua->nama_balita] }}</td>
                                            <td class="text-center">{{ $normal_imtu[$data->orangtua->nama_balita] }}</td>
                                            <td class="text-center">{{ $nilaiV[$data->orangtua->nama_balita] }}</td>
                                            @if ($nilaiV[$data->orangtua->nama_balita] <= 0.25)
                                            <td class="text-center">Gizi Buruk</td>
                                            @elseif ($nilaiV[$data->orangtua->nama_balita] > 0.26 && $nilaiV[$data->orangtua->nama_balita] <= 0.74)
                                            <td class="text-center">Gizi Kurang</td>
                                            @else
                                            <td class="text-center">Gizi Baik</td>
                                            @endif
                                        </tr>               
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </section>
        </div>
    </div>

@endsection
@push('addon-script')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var chartBuruk = JSON.parse('<?php echo json_encode($chartBuruk); ?>');
        var chartKurang = JSON.parse('<?php echo json_encode($chartKurang); ?>');
        var chartBaik = JSON.parse('<?php echo json_encode($chartBaik); ?>');

        var ctx = document.getElementById('statusGizi').getContext('2d');
        ctx.canvas.width = 100;
        ctx.canvas.height = 100;
        var myChart = new Chart(ctx, {
            type: 'pie',
            responsive: true,
            maintainAspectRatio: false,
            data: {
                labels: ['Gizi Buruk', 'Gizi Kurang', 'Gizi Baik'],
                datasets: [{
                    label: '# Presentase Status Gizi',
                    data: [chartBuruk, chartKurang, chartBaik],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(119, 252, 3, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(119, 252, 3, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        setTimeout(function() {
          window.print();
        }, 3000);
    </script>
@endpush