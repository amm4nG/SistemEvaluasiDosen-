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
                            <a href="" class="nav-link active">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Matakuliah
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @if ($id == 1)
                                    <li class="nav-item">
                                        <a href="{{ route('matakuliah.show', 1) }}" class="nav-link active">
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
                                @elseif ($id == 2)
                                    <li class="nav-item">
                                        <a href="{{ route('matakuliah.show', 1) }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Informatika</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('matakuliah.show', 2) }}" class="nav-link active">
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
                                @else
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
                                        <a href="{{ route('matakuliah.show', 3) }}" class="nav-link active">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>PWK</p>
                                        </a>
                                    </li>
                                @endif
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
                        <div class="col-md-10">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <h3 class="text-capitalize">Matakuliah {{ $prodi->nama_prodi }}</h3>
                                    <label for="">upload daftar matakuliah</label>
                                    @if ($errors->any())
                                        @foreach ($errors->all() as $error)
                                            <p class="text-danger">{{ $error }}</p>
                                        @endforeach
                                    @endif
                                    @if (session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success')[0] }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @endif
                                    @if (session('delete'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('delete') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @endif
                                    <form action="{{ route('matakuliah.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{ $prodi->id }}" name="id_prodi"
                                            id="">
                                        <input type="file" class="mb-3" name="file" id="">
                                        <button class="btn btn-info mb-3" type="submit"><i
                                                class="fas fa-cloud-upload-alt mr-1"></i> upload</button>
                                        <a data-toggle="modal" data-target="#exampleModal"
                                            class="btn btn-primary mb-3"><i class="fas fa-plus fa-xs mr-1"></i> tambah
                                            manual</a>
                                    </form>
                                    <table id="matakuliah" class="table table-sm table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Matkul</th>
                                                <th>Nama Matkul</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($matakuliah as $m)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $m->kode_matakuliah }}</td>
                                                    <td>{{ $m->nama_matakuliah }}</td>
                                                    <td>
                                                        <form action="{{ route('matakuliah.destroy', $m->id) }}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <a href="" class="btn btn-warning btn-sm"><i
                                                                    class="fas fa-edit"></i></a>
                                                            <button type="submit" class="btn btn-danger btn-sm"><i
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
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('tambah-matakuliah.store') }}" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title text-capitalize" id="exampleModalLabel">Tambah Matakuliah
                            {{ $prodi->nama_prodi }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" value="{{ $prodi->id }}" name="id_prodi" id="">
                        <input type="text" required class="form-control mb-3" placeholder="Kode Matakuliah" name="kode_matakuliah" id="">
                        <input type="text" required class="form-control" name="nama_matakuliah" id="" placeholder="Nama Matakuliah">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $(function() {
                $("#matakuliah").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            });
        });
    </script>
@endsection
