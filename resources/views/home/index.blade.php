<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MI Permata Hati Denpasar</title>
        <link rel="icon" type="image/x-icon" href="{{asset('main/img/favicon/favicon-32x32.png')}}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('home/css/styles.css')}}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#profil">Profil</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#visimisi">Visi & Misi</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Galeri</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Guru</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#pengumuman">Pengumuman</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Selamat Datang Di Sekolah Kami!</div>
                <div class="masthead-heading text-uppercase">Senang Berjumpa Dengan Anda</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Selengkapnya</a>
            </div>
        </header>

        <!-- Profil -->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Profil</h2>
                    <h3 class="section-subheading text-muted">&nbsp;</h3>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset('main/img/building.svg')}}" alt="" width="100%">
                    </div>
                    <div class="col-md-6 pt-4">
                        <table class="table">
                            <tr>
                                <th scope="row">Nama Madrasah</th>
                                <td>:</td>
                                <td>{{$profil->nama_sekolah}}</td>
                            </tr>
                            <tr>
                                <th scope="row">NPSN</th>
                                <td>:</td>
                                <td>{{$profil->npsn}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Alamat</th>
                                <td>:</td>
                                <td>{{$profil->alamat}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Status Sekolah</th>
                                <td>:</td>
                                <td>{{$profil->status_sekolah}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Akreditasi</th>
                                <td>:</td>
                                <td>{{$profil->akreditasi}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Kurikulum</th>
                                <td>:</td>
                                <td>{{$profil->kurikulum}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Kepala Sekolah</th>
                                <td>:</td>
                                <td>{{$profil->kepala_sekolah}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Visi & Misi -->
        <section class="page-section" id="visimisi">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Visi & Misi</h2>
                    <h3 class="section-subheading text-muted">&nbsp;</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('home/assets/img/about/4.jpg')}}" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Visi</h4>
                            </div>
                            <div class="timeline-body text-muted">{!! $profil->visi !!}</div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('home/assets/img/about/3.jpg')}}" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Misi</h4>
                            </div>
                            <div class="timeline-body text-muted">
                                {!! $profil->misi !!}
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Bersama
                                <br />
                                Kita
                                <br />
                                Bisa!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Galeri Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Galeri</h2>
                    <h3 class="section-subheading text-muted">&nbsp;</h3>
                </div>
                <div class="row">
                    @foreach ($galeris as $galeri)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#modal-galeri-{{$galeri->id}}">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <div class="img-div" style="background-image: url({{  url('storage/'.basename($galeri->image)) }});">
                                </div>
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">{{$galeri->nama_foto}}</div>
                                <div class="portfolio-caption-subheading text-muted">{{$galeri->kategori['nama']}}</div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="portfolio-modal modal fade" id="modal-galeri-{{$galeri->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="close-modal" data-dismiss="modal"><img src="{{asset('home/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="modal-body">
                                                <!-- Project Details Go Here-->
                                                <h2 class="text-uppercase">{{$galeri->nama_foto}}</h2>
                                                <p class="item-intro text-muted">&nbsp;</p>
                                                <img class="img-fluid d-block mx-auto" src="{{  url('storage/'.basename($galeri->image)) }}" alt="">
                                                <p>{!! $galeri['deskripsi'] !!}</p>
                                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                                    <i class="fas fa-times mr-1"></i>
                                                    Tutup
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End Modal -->
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Guru -->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Guru</h2>
                    <h3 class="section-subheading text-muted">&nbsp;</h3>
                </div>
                <div class="row">
                    @foreach ($gurus as $guru)
                    <div class="col-lg-4">
                        <div class="team-member">
                            @if (isset($guru->foto_tendik))
                            <img class="mx-auto rounded-circle" src="{{  url('storage/'.basename($guru['foto_tendik'])) }}" alt="">
                            @else
                            <img class="mx-auto rounded-circle" src="{{asset('home/assets/img/team/2.jpg')}}" alt="" />
                            @endif
                            <h4>{{$guru->nama}}</h4>
                            <p class="text-muted">&nbsp;</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Galeri Grid-->
        <section class="page-section bg-light" id="pengumuman">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Pengumuman</h2>
                    <h3 class="section-subheading text-muted">&nbsp;</h3>
                </div>
                <div class="row" data-masonry='{"percentPosition": true }'>
                    @foreach ($informasis as $informasi)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="card p-3">
                            <div class="portfolio-item">
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">{{$informasi->judul}}</div>
                                    <div class="portfolio-caption-subheading text-muted">{!! $informasi->isi !!}</div>
                                </div>
                            </div>
                            <p class="text-right text-muted mb-0">
                                {{ date('d-m-Y', strtotime($informasi->created_at)) }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">&nbsp;</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        Copyright © MI Permata Hati Denpasar 2021
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        &nbsp;
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="{{asset('home/assets/mail/jqBootstrapValidation.js')}}"></script>
        <script src="{{asset('home/assets/mail/contact_me.js')}}"></script>
        <!-- Core theme JS-->
        <script src="{{asset('home/js/scripts.js')}}"></script>
        <!-- Masonsry -->
        <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
    </body>
</html>
