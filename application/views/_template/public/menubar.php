<body>

    <!-- Pre loader -->
    <div class="preloader">
        <img class="preloader-item" src="<?= base_url() ?>assets/images/loader/02.gif" alt="Loading">
    </div>

    <!-- Nav hamburger right START -->
    <div class="nav-hamburger-end overflow-auto collapse bg-dark" id="nav-hamburger-end" style="background-image:url(<?= base_url() ?>assets/images/bg/pattern/03.png); background-position: center left; background-size: cover;">
        <div class="vh-lg-100 d-flex align-items-start flex-column px-5 px-md-6 pt-4 pt-md-7">

            <!-- Hamburger inner START -->
            <ul class="nav d-block flex-column mb-5">
                <li class="nav-item position-relative">
                    <a href="index.html" class="nav-link text-white-stroke display-6 h5 d-block">Home</a>
                    <!-- Nav hamburger dropdown START -->
                    <a class="dropdown-toggle collapsed" data-bs-toggle="collapse" href="#home-dropdown-collapse" role="button" aria-expanded="false" aria-controls="home-dropdown-collapse"></a>
                <li class="collapse" id="home-dropdown-collapse">
                    <ul class="list-unstyled w-100 pb-4 pe-0 pe-lg-5">
                        <li> <a class="dropdown-item px-0 text-body" href="index.html">Classic Default</a> </li>
                        <li> <a class="dropdown-item px-0 text-body" href="index-2.html">Agency classic</a> </li>
                        <li> <a class="dropdown-item px-0 text-body" href="index-3.html">Agency Trendy<span class="badge bg-danger ms-2">Hot</span></a> </li>
                        <li> <a class="dropdown-item px-0 text-body" href="index-4.html">Agency Modern</a> </li>
                        <li> <a class="dropdown-item px-0 text-body" href="index-5.html">Studio showcase</a> </li>
                        <li> <a class="dropdown-item px-0 text-body" href="index-6.html">Creative agency</a> </li>
                        <li> <a class="dropdown-item px-0 text-body" href="index-7.html">Digital studio</a> </li>
                        <li> <a class="dropdown-item px-0 text-body" href="index-8.html">Portfolio showcase</a> </li>
                        <li> <a class="dropdown-item px-0 text-body" href="index-9.html">Corporate </a> </li>
                        <li> <a class="dropdown-item px-0 text-body" href="index-10.html">Personal Portfolio</a> </li>
                    </ul>
                </li>
                <!-- Nav hamburger dropdown END -->
                <li class="nav-item">
                    <a class="nav-link text-white-stroke display-6 h5" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white-stroke display-6 h5" href="#">Work</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white-stroke display-6 h5" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white-stroke display-6 h5" href="#">Our Journal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white-stroke display-6 h5" href="#">Contact Us</a>
                </li>
            </ul>
            <div class="mt-auto mb-5">
                <a href="#" class="font-heading text-white text-primary-hover d-block mb-3">hello@folio.com</a>
                <a href="#" class="font-heading text-white text-primary-hover">+(251) 854-6308</a>
            </div>
            <!-- Hamburger inner END -->
        </div>

        <!-- Hamburger button close START -->
        <a class="position-absolute top-0 end-0 mt-3 mt-md-5 me-3 me-md-5 btn btn-primary btn-round zoom-hover" data-bs-toggle="collapse" href="javascript:void(0)" data-bs-target="#nav-hamburger-end">
            <i class="fas fa-times p-0"></i>
        </a>
        <!-- Hamburger button close END -->
    </div>
    <!-- Nav hamburger right END -->

    <!-- Search START -->
    <div class="search-full collapse bg-dark p-3 pb-lg-0" id="search-open">
        <div class="container position-relative">
            <h2 class="position-absolute start-0 bottom-0 mb-n5 display-1 text-white-stroke opacity-1">
                <span class="d-block">Search</span>
            </h2>
            <div class="row vh-100">
                <div class="d-flex flex-column my-auto py-5 w-100">
                    <!-- Search form START -->
                    <form class="form-dark form-line position-relative w-100">
                        <div class="mb-3 input-group-lg input-text-white-stroke mb-0">
                            <!-- Search input -->
                            <input class="form-control font-heading caret-primary mb-0 pe-6" type="text" name="search" placeholder="What are you looking for?">
                            <span class="focus-border"></span>
                        </div>
                        <!-- Search button -->
                        <button type="button" class="position-absolute end-0 top-0 btn pb-3 text-primary-hover h-100">
                            <i class="bi bi-search display-8"></i>
                        </button>
                    </form>
                    <!-- Search form END -->
                    <p class="small mt-2 mb-0">e.g. Template, Bootstrap, WordPress theme </p>
                </div>

                <!-- Search button close START -->
                <a class="position-fixed top-0 end-0 m-3 m-md-5 btn btn-white btn-round zoom-hover" data-bs-toggle="collapse" href="javascript:void(0)" data-bs-target="#search-open" aria-expanded="true">
                    <i class="fas fa-times p-0"></i>
                </a>
                <!-- Search button close END -->
            </div>
        </div>
    </div>
    <!-- Search END -->

    <!-- Header START -->
    <header class="navbar-dark navbar-transparent bg-success navbar-sticky">

        <!-- Logo Nav START -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo START -->
                <a class="navbar-brand" href="<?= base_url() ?>">
                    <!-- Logo -->
                    <img src="<?= base_url() ?>assets/images/logo.png" alt="Logo Terekel Nekad" width="100px" srcset="">
                </a>
                <!-- Logo END -->

                <!-- Responsive navbar toggler -->
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"> </span>
                </button>

                <!-- Main Menu START -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"> <a class="nav-link" href="<?= base_url() ?>">Home</a></li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile</a>
                            <ul class="dropdown-menu" aria-labelledby="pagesMenu">
                                <li> <a class="dropdown-item" href="<?= base_url() ?>">Sejarah</a></li>
                                <li> <a class="dropdown-item" href="<?= base_url() ?>">Visi & Misi</a></li>
                                <li> <a class="dropdown-item" href="<?= base_url() ?>">Struktur Organisasi</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="demosMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Destinasi</a>
                            <div class="dropdown-menu pb-3 pb-lg-0" aria-labelledby="demosMenu">
                                <div class="d-block d-sm-flex">
                                    <ul class="list-unstyled w-100 pe-0 pe-lg-5">
                                        <!-- <li class="dropdown-header">Agency Demos</li> -->
                                        <li> <a class="dropdown-item" href="<?= base_url() ?>">JTA Bojong</a> </li>
                                        <li> <a class="dropdown-item" href="<?= base_url() ?>">Taman Batu</a> </li>
                                        <li> <a class="dropdown-item" href="<?= base_url() ?>">Kampung Tajur<span class="badge bg-danger ms-2">Hot</span></a> </li>
                                        <li> <a class="dropdown-item" href="<?= base_url() ?>">Kampung Air Tajur</a> </li>
                                        <li> <a class="dropdown-item" href="<?= base_url() ?>">Kolam Renang Cihanjawar</a> </li>
                                    </ul>
                                    <ul class="list-unstyled w-100 pe-0 pe-lg-5">
                                        <!-- <li class="dropdown-header mt-3 mt-sm-0">Portfolio Demos</li> -->
                                        <li> <a class="dropdown-item" href="<?= base_url() ?>">Kolam Renang Darmaga Cihanjawar</a> </li>
                                        <li> <a class="dropdown-item" href="<?= base_url() ?>">Panenjoan Sindang Panon</a> </li>
                                        <li> <a class="dropdown-item" href="<?= base_url() ?>">Curug Cisaruat Burangrang</a> </li>
                                        <li> <a class="dropdown-item" href="<?= base_url() ?>">Kuliner</a> </li>
                                        <li> <a class="dropdown-item" href="<?= base_url() ?>">Penginapan</a> </li>
                                    </ul>
                                </div>
                                <!-- Nav action box -->
                                <div class="w-100 mt-4 d-none d-lg-flex">
                                    <div class="text-center bg-primary-multiply position-relative overflow-hidden px-3 py-5 w-100">
                                        <h4 class="mb-0 text-white">Liburan Kuy!</h4>
                                        <p class=" text-white">Supaya tiis ceuli herang panon..</p>
                                        <a class="btn btn-white btn-sm" target="_blank" href="<?= base_url() ?>">Kontak Kami</a>
                                        <img class="bg-primary-multiply position-absolute top-50 start-50 translate-middle z-index-n9 w-100" src="<?= base_url() ?>assets/images/bg/03.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item"> <a class="nav-link" href="<?= base_url() ?>">Berita <span class="badge bg-warning ms-2"> news </span></a></li>
                        <li class="nav-item"> <a class="nav-link" href="<?= base_url() ?>">ADART</a></li>
                        <li class="nav-item"> <a class="nav-link" href="<?= base_url() ?>">Tentang</a></li>
                        <li class="nav-item"> <a class="nav-link" href="<?= base_url() ?>">Kontak</a></li>
                    </ul>
                </div>
                <!-- Main Menu END -->

                <!-- Nav right START -->
                <div class="nav flex-nowrap align-items-center">
                    <!-- Nav Search Opener-->
                    <div class="nav-item">
                        <a class="nav-link ms-2" data-bs-toggle="collapse" href="javascript:void(0)" data-bs-target="#search-open">
                            <i class="bi bi-search display-9 "> </i>
                        </a>
                    </div>
                    <!-- Nav Button -->
                    <div class="nav-item d-xl-block">
                        <a href="#" class="btn btn-sm btn-primary mb-0 mx-2"><i class="far fa-user me-2"></i>Login</a>
                    </div>
                    <!-- Nav side Opener -->
                    <div class="nav-item">
                        <a class="nav-link pe-0" data-bs-toggle="collapse" href="javascript:void(0)" data-bs-target="#nav-hamburger-end">
                            <i class="bi bi-text-right rtl-flip display-8"></i>
                        </a>
                    </div>
                </div>
                <!-- Nav right END -->
            </div>
        </nav>
        <!-- Logo Nav END -->
    </header>
    <!-- =======================
Header END -->
    <!-- **************** MAIN CONTENT START **************** -->
    <main>