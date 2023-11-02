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
                            <a href="{{ url('rekap-evaluasi') }}" class="nav-link">
                                <i class="nav-icon fas fa-file-alt"></i>
                                <p>
                                    Rekap Evaluasi
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('rekap-evaluasi/1') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Informatika</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index2.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sipil</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index3.html" class="nav-link">
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
                            <a href="{{ url('periode') }}" class="nav-link active">
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
                        <div class="col-md-6">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <h3 class="">Program Studi</h3>
                                    <a data-toggle="modal" data-target="#exampleModal" class="btn btn-info mb-3 mt-3"><i class="fas fa-plus fa-xs"></i> periode</a>
                                    <table id="periode" class="table table-sm table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tahun Ajaran</th>
                                                <th>Semester</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($periode as $p)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $p->start }}/{{ $p->end }}</td>
                                                    <td>{{ $p->semester }}</td>
                                                    <td>{{ $p->status }}</td>
                                                    <td>
                                                        <form action="" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <a href="" class="btn btn-warning btn-sm"><i
                                                                    class="fas fa-edit"></i></a>
                                                            <button class="btn btn-danger btn-sm"><i
                                                                    class="fas fa-trash-alt"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
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
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus fa-xs"></i> Tambah Periode</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        @csrf
                        <p>Tahun Ajaran</p>
                        <input type="number" placeholder="start year" class="form-control mb-2" name="start" id="">
                        <input type="number" class="form-control mb-2" placeholder="final year" name="end" id="">
                        <p class="mt-3">pilih semester</p>
                        <select name="semester" class="form-control mb-2" id="">
                            <option value="ganjil">Ganjil</option>
                            <option value="genap">Genap</option>
                        </select>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $(function() {
                $("#periode").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            });
        });
    </script>
@endsection
