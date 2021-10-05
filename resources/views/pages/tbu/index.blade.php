@extends('layout.app')

@section('title', 'SPKBalita | Data Tinggi Badan menurut Umur')

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
                        <h1 class="m-0">Data Tinggi Badan menurut Umur (TB /U)</h1>
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
                                <a href="{{ url('/tbu/create') }}" class="btn btn-info float-right mb-2">Tambah Data</a>
                                <table id="tableData" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center" rowspan="2">Umur (bulan)</th>
                                            <th class="text-center" colspan="7">Tinggi Badan (cm)</th>
                                        </tr>
                                        <tr>
                                            <th class="text-center">-3SD</th>
                                            <th class="text-center">-2SD</th>
                                            <th class="text-center">-1SD</th>
                                            <th class="text-center">Median</th>
                                            <th class="text-center">+1SD</th>
                                            <th class="text-center">+2SD</th>
                                            <th class="text-center">+3SD</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tbu as $data)
                                            <tr>
                                                <td class="text-center">{{ $data->umur }}</td>
                                                <td class="text-center">{{ $data->min3sd }}</td>
                                                <td class="text-center">{{ $data->min2sd }}</td>
                                                <td class="text-center">{{ $data->min1sd }}</td>
                                                <td class="text-center">{{ $data->median }}</td>
                                                <td class="text-center">{{ $data->plus1sd }}</td>
                                                <td class="text-center">{{ $data->plus2sd }}</td>
                                                <td class="text-center">{{ $data->plus3sd }}</td>
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
} );
</script>
@endpush