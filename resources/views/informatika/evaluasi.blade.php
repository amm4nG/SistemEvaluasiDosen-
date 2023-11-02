<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>EDOM Fakultas Teknik | Unsulbar</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/') }}assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('/') }}assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha384-vZv4+q4Wyz7DqBk8o5u+3y1DzR+A9tS5gaYB/QuEz6D8DauaZ7sYJO2k4t6w3D0s" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Caveat:wght@700&family=Josefin+Sans:wght@200&family=Montserrat:wght@300&family=Nanum+Myeongjo&family=Roboto+Mono:wght@100;300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha384-vZv4+q4Wyz7DqBk8o5u+3y1DzR+A9tS5gaYB/QuEz6D8DauaZ7sYJO2k4t6w3D0s" crossorigin="anonymous">
</head>

<body>

    <main id="main">

        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2><a href="{{ url('informatika') }}"><i class="bi bi-arrow-left-short"></i></a> Evaluasi Dosen
                    </h2>
                </div>

                <form action="{{ url('evaluasi-store') }}" method="post">
                    <div class="row justify-content-center">

                        <input type="hidden" value="{{ $dosen->nidn }}" name="nidn" id="">
                        <input type="hidden" value="{{ $dosen->id_prodi }}" name="id_prodi" id="">
                        <div class="col-md-7 mb-3"data-aos="zoom-in" data-aos-delay="100">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            {{-- @error('gagal')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror --}}
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @csrf
                            <div class="card p-3 shadow">
                                <div class="card-body">
                                    <h4>{{ $dosen->nama_dosen }}</h4>
                                    <p>NIDN: {{ $dosen->nidn }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 mb-3" data-aos="zoom-in" data-aos-delay="100">
                            <div class="card shadow p-3">
                                <div class="card-body">
                                    <p>Pilih Matakuliah</p>
                                    @forelse ($matakuliah as $m)
                                        <p><input type="radio" required value="{{ $m->kode_matakuliah }}"
                                                name="kode_matakuliah" id="kode_matakuliah">
                                            {{ $m->nama_matakuliah }}
                                        </p>
                                    @empty
                                        -
                                    @endforelse
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 mb-3" data-aos="zoom-in" data-aos-delay="100">
                            <div class="card shadow p-3">
                                <div class="card-body">
                                    @php
                                        $opsi = ['Sangat Baik', 'Baik', 'Cukup Baik', 'Kurang Baik', 'Sangat Kurang'];
                                        // $pertanyaan = $pertanyaan->toArray();
                                    @endphp
                                    @foreach ($pertanyaan as $p)
                                        @php
                                            shuffle($opsi);
                                        @endphp
                                        <p>{{ $loop->iteration }}. {{ $p['pertanyaan'] }}</p>
                                        {{-- @foreach ($opsi as $nilai)
                                            <p><input type="radio" value="{{ $nilai }}" required
                                                    name="nilai-{{ $p['id'] }}"
                                                    id="nilai-{{ $p['id'] }}"> {{ $nilai }}
                                            </p>
                                        @endforeach --}}
                                        <p><input type="radio" value="A" required
                                                name="nilai-{{ $p->id }}" id="nilai-{{ $p->id }}">
                                            Sangat Baik </p>
                                        <p><input type="radio" value="B" required
                                                name="nilai-{{ $p->id }}" id="nilai-{{ $p->id }}"> Baik
                                        </p>
                                        <p><input type="radio" value="C" required
                                                name="nilai-{{ $p->id }}" id="nilai-{{ $p->id }}"> Cukup
                                            Baik</p>
                                        <p><input type="radio" value="D" required
                                                name="nilai-{{ $p->id }}" id="nilai-{{ $p->id }}">
                                            Kurang Baik</p>
                                        <p><input type="radio" value="E" required
                                                name="nilai-{{ $p->id }}" id="nilai-{{ $p->id }}">
                                            Sangat Kurang</p>
                                    @endforeach
                                    <p>Ada Saran?</p>
                                    <textarea name="saran" id="" cols="30" rows="7" class="form-control"></textarea>
                                    <button class="btn btn-primary mt-3" id="kirim">Kirim</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section><!-- End Team Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">


        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Arman Umar</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('/') }}assets/vendor/aos/aos.js"></script>
    <script src="{{ asset('/') }}assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/') }}assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('/') }}assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('/') }}assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('/') }}assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="{{ asset('/') }}assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('/') }}assets/js/main.js"></script>

</body>

</html>
