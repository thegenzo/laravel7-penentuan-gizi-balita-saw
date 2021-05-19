@extends('layout.app')

@section('title', 'SPKBalita | Dashboard')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <div class="col-sm-6"></div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-success">
                        <div class="card-header">
                          <h3 class="card-title">Welcome</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          Sistem Pendukung Keputusan Penentuan Gizi Balita Menggunakan Metode SAW
                        </div>
                        <!-- /.card-body -->
                      </div>
                    </div>
                      <!-- /.card -->
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-12">
                      <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="fas fa-user-friends"></i></span>
          
                        <div class="info-box-content">
                          <span class="info-box-text">Jumlah Keluarga</span>
                          <span class="info-box-number">{{ $orangtua }}</span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-12">
                      <div class="info-box">
                        <span class="info-box-icon bg-success"><i class="fas fa-child"></i></span>
          
                        <div class="info-box-content">
                          <span class="info-box-text">Jumlah Balita</span>
                          <span class="info-box-number">{{ $balita }}</span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-12">
                      <div class="info-box">
                        <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>
          
                        <div class="info-box-content">
                          <span class="info-box-text">Admin</span>
                          <span class="info-box-number">{{ $admin }}</span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-12">
                      <div class="info-box">
                        <span class="info-box-icon bg-danger"><i class="fas fa-balance-scale-right"></i></span>
          
                        <div class="info-box-content">
                          <span class="info-box-text">Kriteria</span>
                          <span class="info-box-number">4</span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
            </div>
        </div>
    </section>
  
  @endsection