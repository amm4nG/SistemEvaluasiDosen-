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
                                @if ($id == 1)
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
                                @elseif ($id == 2)
                                    <li class="nav-item">
                                        <a href="{{ url('rekap-evaluasi/1') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Informatika</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href={{ url('rekap-evaluasi/2') }}" class="nav-link active">
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
                                @else
                                    <li class="nav-item">
                                        <a href="{{ url('rekap-evaluasi/1') }}" class="nav-link">
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
                                        <a href="{{ url('rekap-evaluasi/3') }}" class="nav-link active">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>PWK</p>
                                        </a>
                                    </li>
                                @endif

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
                            <a href="#" class="nav-link">
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
                        <div id="" class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="text-capitalize mb-3">Rekap Evaluasi Dosen {{ $prodi->nama_prodi }}</h3>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <select class="form-control" name="periode" id="periode">
                                                @foreach ($periode as $p)
                                                    <option value="{{ $p->id }}">
                                                        {{ $p->start }}/{{ $p->end }} {{ $p->semester }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <button class="btn btn-info mt-3 mb-3" id="select-periode">Tampilkan <div
                                                    style="display: none"
                                                    class="spinner-border text-white spinner-border-sm ml-1"
                                                    id="animasi-loading" role="status">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                    <table style="display: none" id="pengampuh"
                                        class="table table-sm table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Dosen</th>
                                                <th>Nama Matkul</th>
                                                <th>Semester</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#select-periode').on('click', function() {
                $('#pengampuh tbody').empty();
                $('#animasi-loading').show()
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                })
                let id_prodi = "{{ $prodi->id }}"
                let id_periode = $('#periode').val()
                $.ajax({
                    url: id_periode + '/edit',
                    method: 'get',
                    data: {
                        id_periode: id_periode,
                        id_prodi: id_prodi
                    },
                    success: function(response) {
                        $('#pengampuh').show()
                        let no = 0
                        response.pengampuh.forEach(element => {
                            no += 1
                            $('#pengampuh').append(
                                `<tr>
                                    <td>` + no + `</td>
                                    <td>` + element['nama_dosen'] + `</td>
                                    <td>` + element['nama_matakuliah'] + `</td>
                                    <td>` + element['semester'] + `</td>
                                    <td>` + element['status'] + `</td>
                                    <td>
                                        <form action="{{ route('rekap-evaluasi.store') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="id_prodi" value="` + id_prodi + `" id="">
                                            <input type="hidden" value="` + element['nidn'] + `" name="nidn" id="">
                                            <input type="hidden" value="` + element['kode_matakuliah'] + `" name="kode_matakuliah" id="">
                                            <button class="btn btn-info btn-sm"><i class="fas fa-eye"></i>
                                                Lihat
                                                Rekap</button>
                                        </form>
                                    </td>
                                </tr>`
                            )
                        });
                        // Periksa apakah tabel sudah memiliki inisialisasi DataTables
                        if ($.fn.DataTable.isDataTable('#pengampuh')) {
                            // Hancurkan inisialisasi DataTables yang ada
                            $('#pengampuh').DataTable().destroy();
                        }
                        $("#pengampuh").DataTable({
                            "responsive": true,
                            "lengthChange": false,
                            "autoWidth": false,
                            "buttons": ["copy", "csv", "excel", "pdf", "print",
                                "colvis"
                            ]
                        }).buttons().container().appendTo(
                            '#example1_wrapper .col-md-6:eq(0)');
                        $('#animasi-loading').hide()
                    },
                    error: function(response) {
                        console.log(response)
                    }
                })
            })
        });
    </script>
@endsection
