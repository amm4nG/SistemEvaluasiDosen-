{{-- @php
$nilai = ['A', 'B', 'C', 'D', 'E'];
@endphp
<h1>Jumlah Pengevaluasi : {{ $jumlahPengevaluasi }}</h1>
@foreach ($data as $pertanyaan)
<p>{{ $pertanyaan['pertanyaan'] }}</p>
@foreach ($nilai as $n)
@php
$count = isset($pertanyaan['data'][$n]) ? $pertanyaan['data'][$n] : 0;
@endphp
<p>{{ $n }} : {{ $count }}</p>
@endforeach
@endforeach --}}
@extends('layouts.app')
@section('content')
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            {{-- <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        --}}
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-light navbar-light fixed-top">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <img src="{{ asset('storage/img/image-kosong.png') }}" style="width: 30px" ; height="30px"
                            class="rounded-circle" alt=""> <span class="ml-1">Admin</span><i
                            class="ml-2 fas fa-caret-down"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-user"></i> Profil
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('validasi.index') }}" class="dropdown-item text-danger">
                            <i class="fas fa-sign-out-alt"></i> Keluar
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-light elevation-4">
            <!-- Brand Logo -->

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <a class="brand-link">
                    <img src="{{ asset('storage/img/unsulbar.jpg') }}" alt="Unsulbar" class="brand-image rounded-circle">
                    <span class="brand-text font-weight-dark text-bold">EDOM FT</span>
                </a>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{ url('home') }}" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Beranda
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">Menu Utama</li>
                        <li class="nav-item">
                            <a href="{{ url('rekap-evaluasi') }}" class="nav-link active">
                                <i class="nav-icon fas fa-file-alt"></i>
                                <p>
                                    Rekap Evaluasi
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('rekap-evaluasi/1') }}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Informatika</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('rekap-evaluasi/2') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sipil</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('rekap-evaluasi/3') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>PWK</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('program-studi') }}" class="nav-link">
                                <i class="nav-icon fas fa-graduation-cap"></i>
                                <p>
                                    Program Studi
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('dosen') }}" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Dosen
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('dosen.show', 1) }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Informatika</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('dosen.show', 2) }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sipil</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('dosen.show', 3) }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>PWK</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Matakuliah
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('matakuliah.show', 1) }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Informatika</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('matakuliah.show', 2) }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sipil</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('matakuliah.show', 3) }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>PWK</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('pengampuh-matakuliah') }}" class="nav-link">
                                <i class="nav-icon fas fa-chalkboard-teacher"></i>
                                <p>
                                    Pengampuh Matkul
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('pengampuh-matakuliah/1') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Informatika</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('pengampuh-matakuliah/2') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sipil</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('pengampuh-matakuliah/3') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>PWK</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pertanyaan.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-question-circle"></i>
                                <p>
                                    Kelola Pertanyaan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('periode') }}" class="nav-link">
                                <i class="nav-icon fas fa-clock"></i>
                                <p>
                                    Periode
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- Sidebar Menu -->

                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class=" content-wrapper" style="margin-top: 3.5rem">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card p-3">
                                <div class="card-body">
                                    @php
                                        $nilai = ['A', 'B', 'C', 'D', 'E'];
                                    @endphp
                                    {{-- <a href={{ route('rekap-evaluasi.show', $id_prodi) }}" class="mb-3"><i
                                            class="fas fa-arrow-left fa-xs"></i> Kembali</a> --}}
                                    <h3>{{ $dosen->nama_dosen }}</h3>
                                    <p>Matakuliah : {{ $matakuliah->nama_matakuliah }}</p>
                                    @if ($jumlahPengevaluasi > 0)
                                        <h4 class="mb-3 mt-3">Jumlah Mahasiswa Pengevaluasi Ada {{ $jumlahPengevaluasi }}
                                            Orang
                                        </h4>
                                        @foreach ($data as $pertanyaan)
                                            <p>{{ $loop->iteration }}. {{ $pertanyaan['pertanyaan'] }}</p>
                                            @foreach ($nilai as $n)
                                                @php
                                                    $count = isset($pertanyaan['data'][$n]) ? $pertanyaan['data'][$n] : 0;
                                                @endphp
                                                <div class="col-md-4">
                                                    <div class="progress-group">
                                                        Nilai {{ $n }}
                                                        <span
                                                            class="float-right"><b>{{ $count }}/</b>{{ $jumlahPengevaluasi }}</span>
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-primary"
                                                                style="width: {{ ($count / $jumlahPengevaluasi) * 100 }}%"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- <p><span class="text-bold">Nilai {{ $n }}</span> :
                                                    {{ $count }} Orang
                                                    ({{ ($count / $jumlahPengevaluasi) * 100 }}%)
                                                </p> --}}
                                            @endforeach
                                        @endforeach
                                    @else
                                        <h4 class="mb-3 mt-3">Belum Ada Mahasiswa Yang Melakukan Evaluasi
                                    @endif

                                </div>
                            </div>
                        </div>
                        @if (optional($saran)->count() > 0)
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>Saran Mahasiswa</h4>
                                        @foreach ($saran as $s)
                                            <p class="font-italic">- {{ $s->saran }}</p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @else
                        @endif

                    </div>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; {{ date('Y') }} <a href="">Arman Umar</a>.</strong>
            All rights reserved.
        </footer>
    </div>
@endsection
