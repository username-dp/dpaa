<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="PGRI-name">
                <a class="navbar-brand" href="#"><b>SMK PGRI WLINGI</b></a>
                <div class="PGRI-title">
                    <div class="text-secondary">
                        <small>SMP / SMK / SMA</small>
                    </div>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Akademik
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Kesiswaan
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Berita
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Galeri</a>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Kontak</a>
                </ul>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-search" viewBox="0 0 16 16">
                <path
                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
            </svg>
        </div>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://cdn.pixabay.com/photo/2014/10/07/13/48/mountain-477832_1280.jpg" alt=""
                    width="1355" height="435">
            </div>
            <div class="carousel-item">
                <img src="https://cdn.pixabay.com/photo/2014/10/07/13/48/mountain-477832_1280.jpg" alt=""
                    width="1355" height="435">
            </div>
            <div class="carousel-item">
                <img src="https://cdn.pixabay.com/photo/2014/10/07/13/48/mountain-477832_1280.jpg" alt=""
                    width="1355" height="435">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <div class="card mt-3">
                    <div class="card">
                        <div class="card" style="width: 45,5rem;">
                            <div class="card-header text-dark fw-bold" style="background-color: gray">
                                <h5>Sambutan Kepala Sekolah</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0sfCJ5Gmx0KBmMh_gjh9aAN3l6p0H-tGSjES6iVRMi5cqSO5mugAxP3HH&s=10"
                                    class="img-thumbnail float-start me-4 mb-2" alt="..." width="150"
                                    height="150">
                                <p>
                                <h2>Assalamu'alaikum Wr.Wb.</h2>
                                Yang saya hormati Bapak/Ibu Guru, tenaga kependidikan, orang tua/wali siswa, serta
                                anak-anak yang saya banggakan. Puji syukur kita panjatkan ke hadirat Allah SWT karena
                                atas rahmat-Nya kita dapat berkumpul dalam keadaan sehat. Saya mengucapkan terima kasih
                                kepada seluruh warga sekolah atas kerja sama dan dukungannya dalam memajukan sekolah.
                                Mari kita terus menciptakan lingkungan sekolah yang nyaman, disiplin, dan penuh semangat
                                untuk belajar.

                                Kepada anak-anak yang saya banggakan, belajarlah dengan sungguh-sungguh, hormati guru
                                dan orang tua, serta jangan mudah menyerah dalam meraih cita-cita. Semoga kita semua
                                dapat terus bekerja sama untuk menjadikan sekolah semakin maju dan menghasilkan generasi
                                yang cerdas, berkarakter, dan berakhlak mulia. Wassalamu’alaikum warahmatullahi
                                wabarakatuh.
                                <h4 class="mt-4 mb-0">
                                    Kepala Sekolah
                                </h4>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col md-3">
                <div class="card mt-3">
                    <div class="card" style="width: 22,5rem;">
                        <div class="card-header text-dark fw-bold" style="background-color: gray">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-megaphone" viewBox="0 0 16 16">
                                <path
                                    d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 75 75 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0m-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233q.27.015.537.036c2.568.189 5.093.744 7.463 1.993zm-9 6.215v-4.13a95 95 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A61 61 0 0 1 4 10.065m-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68 68 0 0 0-1.722-.082z" />
                            </svg>
                            <b>Pengumuman Terbaru</b>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-2">
                                        <div
                                            class="d-inline-flex p-2 bg-light border border-secondary-subtle rounded-3 shadow-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="currentColor" class="bi bi-file-earmark-text-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <a href="https://www.mismalandbaw.sch.id/berita/detail/penerimaan-peserta-didik-baru-tahun-pelajaran-20252026">Pendaftaran Peserta Didik Baru Tahun Ajaran 2025/2026</a>
                                    </div>
                                    <br>

                                    <div class="class text-secondary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-calendar-minus-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2M6 10h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1 0-1" />
                                        </svg>
                                        20 Mar 2025
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-2">
                                        <div
                                            class="d-inline-flex p-2 bg-light border border-secondary-subtle rounded-3 shadow-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="currentColor" class="bi bi-file-earmark-text-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <a href="https://ekonomi.usm.ac.id/2025/06/10/jadwal-ujian-akhir-semester-genap-2024-2025-kelas-reguler-pagi-fe-usm/">Jadwal Ujian Semester Genap Tahun Ajaran 2024/2025</a>
                                    </div>
                                    <br>

                                    <div class="class text-secondary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-calendar-minus-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2M6 10h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1 0-1" />
                                        </svg>
                                        20 Mar 2025
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-2">
                                        <div
                                            class="d-inline-flex p-2 bg-light border border-secondary-subtle rounded-3 shadow-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="currentColor" class="bi bi-file-earmark-text-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <a href="scribd.com/document/848659133/023-Pemberitahuan-Libur-Hari-Raya-Idul-Fitri-1446-H">Informasi Libur Idul Fitri 1446 H</a>
                                    </div>
                                    <br>

                                    <div class="class text-secondary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-calendar-minus-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2M6 10h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1 0-1" />
                                        </svg>
                                        20 Mar 2025
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-2">
                                        <div
                                            class="d-inline-flex p-2 bg-light border border-secondary-subtle rounded-3 shadow-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="currentColor" class="bi bi-file-earmark-text-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <a href="https://man2kotajambi.mdrsh.id/news/68701/rapat-kelulusan-kelas-xii-man-2-kota-jambi-100-persen-siswa-lulus-bukti-konsistensi-mutu-pendidikan.html">Pengumuman Kelulusan Kelas XII</a>
                                    </div>
                                    <br>

                                    <div class="class text-secondary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-calendar-minus-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2M6 10h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1 0-1" />
                                        </svg>
                                        20 Mar 2025
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-2">
                                        <div
                                            class="d-inline-flex p-2 bg-light border border-secondary-subtle rounded-3 shadow-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="currentColor" class="bi bi-file-earmark-text-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <a href="https://panturanews.com/index.php/panturanews/baca/267854">Kegiatan Bakti Sosial Sekolah</a>
                                    </div>
                                    <br>

                                    <div class="class text-secondary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-calendar-minus-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2M6 10h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1 0-1" />
                                        </svg>
                                        20 Mar 2025
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="button">Lihat Semua Selengkapnya
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mt-3">
                    <div class="card-header text-dark fw-bold" style="background-color: gray">
                        <h5>Kegiatan Terbaru</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 mt-2">
                        <div class="card">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ02zRCxRWDiTP6jbqZ0MLX_DxuMG1_RtOKMMK2Gl6dGw&s"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Upacara Hari Pendidikan Nasional</h5>
                                <p class="card-text">memperingati Hari Pendidikan Nasional. Mari kita jadikan
                                    pendidikan sebagai jalan untuk meraih cita-cita</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mt-1">
                        <div class="card">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpFV_9NfxcHwymZwb7rYKclX5iBfxm0afGAFDXppw1Xg&s"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Kegiatan Ekstrakurikuler Pramuka</h5>
                                <p class="card-text">Melalui Pramuka, kita belajar tentang disiplin, kemandirian,
                                    tanggung jawab, kerja sama, dan kepemimpinan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mt-1">
                        <div class="card">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsJlllVffS31MrEfgBY2s18BTk-fxHe2lQZQpoI1i_qA&s=10"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Lomba Seni dan Olahraga Antar Kelas</h5>
                                <p class="card-text"> Kegiatan ini bertujuan untuk mengembangkan bakat, kreativitas,
                                    sportivitas, dan kekompakan siswa.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mt-1">
                        <div class="card">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQg_pqmTnbHV89NsUdIu-6qwE1JBabxWlHwt-dlF-YuZg&s=10"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Kunjungan Edukasi ke Museum</h5>
                                <p class="card-text"> Kegiatan ini diharapkan dapat menambah wawasan dan pengetahuan
                                    siswa tentang sejarah dan budaya.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
