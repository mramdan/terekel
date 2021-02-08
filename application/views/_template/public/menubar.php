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

        <!-- Navbar top START -->
        <div class="navbar-top d-none d-lg-block">
            <div class="container">
                <div class="d-md-flex justify-content-between align-items-center">
                    <!-- Navbar top Left-->
                    <div class="d-flex align-items-center justify-content-center">
                        <!-- Top info -->
                        <ul class="nav justify-content-center justify-content-md-start">
                            <li class="nav-item me-3" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="bottom" title="Sunday CLOSED">
                                <span><i class="far fa-clock me-2"></i>Visit time: Mon-Sat 9:00-19:00</span>
                            </li>
                            <li class="nav-item">
                                <a class="navbar-link" href="#"><i class="fas fa-headset me-2"></i>Call us now: +135-869-328</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Navbar top Right-->
                    <div class="d-flex align-items-center justify-content-center">
                        <!-- Language -->
                        <div class="dropdown ms-3">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownLanguage" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="fa-fw me-2" src="<?= base_url() ?>assets/images/flags/uk.svg" alt=""> English </a>
                            <div class="dropdown-menu mt-2 shadow" aria-labelledby="dropdownLanguage">
                                <span class="dropdown-item-text">Pilih Bahasa</span>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><img class="fa-fw me-2" src="<?= base_url() ?>assets/images/flags/sp.svg" alt=""> Español</a>
                                <a class="dropdown-item" href="#"><img class="fa-fw me-2" src="<?= base_url() ?>assets/images/flags/fr.svg" alt=""> Français</a>
                                <a class="dropdown-item" href="#"><img class="fa-fw me-2" src="<?= base_url() ?>assets/images/flags/gr.svg" alt=""> Deutsch</a>
                            </div>
                        </div>

                        <!-- Top link -->
                        <ul class="nav ms-3">
                            <li class="nav-item">
                                <a href="contact.html" class="nav-link">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('Auth') ?>" class="nav-link"><i class="far fa-user me-2"></i>Login</a>
                            </li>
                        </ul>

                        <!-- Top social -->
                        <ul class="list-unstyled d-flex">
                            <li> <a class="px-2" href="#"><i class="fab fa-facebook-f"></i></a> </li>
                            <li> <a class="px-2" href="#"><i class="fab fa-instagram"></i></a> </li>
                            <li> <a class="ps-2" href="#"><i class="fab fa-twitter"></i></a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider-light opacity-1"></div>
        <!-- Navbar top END -->

        <!-- Logo Nav START -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo START -->
                <a class="navbar-brand" href="index.html">
                    <!-- Logo SVG Code -->
                    <svg class="navbar-brand-item" viewBox="0 0 189.37 60.812" xmlns="http://www.w3.org/2000/svg">
                        <path class="fill-white" transform="translate(-5874.9 -436.84)" d="m5884 496.54-0.32-24.723 20.69 0.011v-7.983l-20.69-0.7v-15.623l22.25-0.267v-7.983h-31.02v57.268h9.09zm58.26-1.284a18.686 18.686 0 0 0 7.34-6.664 19.248 19.248 0 0 0 0-19.662 18.735 18.735 0 0 0-7.34-6.647 23.765 23.765 0 0 0-20.79 0 18.667 18.667 0 0 0-7.34 6.647 19.187 19.187 0 0 0 0 19.662 18.618 18.618 0 0 0 7.34 6.664 23.765 23.765 0 0 0 20.79 0zm-16.21-6.491a10.774 10.774 0 0 1-4.1-4.061 12.452 12.452 0 0 1 0-11.887 10.812 10.812 0 0 1 4.1-4.043 12.345 12.345 0 0 1 11.64 0 10.673 10.673 0 0 1 4.1 4.043 12.635 12.635 0 0 1 0 11.9 10.673 10.673 0 0 1-4.1 4.043 12.345 12.345 0 0 1-11.64 5e-3zm45.17 7.775v-59.7h-8.64v59.7h8.64zm22 0v-35.545h-8.64v35.541h8.64zm-1.68-43.545a5.4 5.4 0 0 0 1.87-1.909 4.988 4.988 0 0 0 0.72-2.62 4.938 4.938 0 0 0-0.72-2.655 5.5 5.5 0 0 0-1.87-1.875 5.219 5.219 0 0 0-5.26 0 5.559 5.559 0 0 0-1.89 1.875 5.021 5.021 0 0 0-0.71 2.655 5.073 5.073 0 0 0 0.71 2.62 5.45 5.45 0 0 0 1.89 1.909 5.213 5.213 0 0 0 5.26 0zm42.97 42.257a18.686 18.686 0 0 0 7.34-6.664 19.187 19.187 0 0 0 0-19.662 18.735 18.735 0 0 0-7.34-6.647 23.765 23.765 0 0 0-20.79 0 18.667 18.667 0 0 0-7.34 6.647 19.187 19.187 0 0 0 0 19.662 18.618 18.618 0 0 0 7.34 6.664 23.765 23.765 0 0 0 20.79 4e-3zm-16.21-6.491a10.844 10.844 0 0 1-4.1-4.061 12.452 12.452 0 0 1 0-11.887 10.883 10.883 0 0 1 4.1-4.043 12.345 12.345 0 0 1 11.64 0 10.673 10.673 0 0 1 4.1 4.043 12.635 12.635 0 0 1 0 11.9 10.673 10.673 0 0 1-4.1 4.043 12.345 12.345 0 0 1-11.64 9e-3z" />
                        <path class="fill-primary" transform="translate(-5874.9 -436.84)" d="m6061.5 496.89a5.532 5.532 0 0 0 2.05-2.083 5.976 5.976 0 0 0 0-5.761 5.547 5.547 0 0 0-2.05-2.083 5.655 5.655 0 0 0-2.9-0.763 5.761 5.761 0 0 0-2.9 0.763 5.734 5.734 0 0 0-0.02 9.927 5.754 5.754 0 0 0 2.92 0.763 5.655 5.655 0 0 0 2.9-0.763z" />
                    </svg>
                </a>
                <!-- Logo END -->

                <!-- Responsive navbar toggler -->
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"> </span>
                </button>

                <!-- Main Menu START -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"> <a class="nav-link" href="contact.html">Home</a></li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile</a>
                            <ul class="dropdown-menu" aria-labelledby="pagesMenu">
                                <li> <a class="dropdown-item" href="about.html">Profile Terekel Nekad</a></li>
                                <li> <a class="dropdown-item" href="about-advance.html">Visi & Misi</a></li>
                                <li> <a class="dropdown-item" href="service.html">Sejarah</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="demosMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Destinasi</a>
                            <div class="dropdown-menu pb-3 pb-lg-0" aria-labelledby="demosMenu">
                                <div class="d-block d-sm-flex">
                                    <ul class="list-unstyled w-100 pe-0 pe-lg-5">
                                        <!-- <li class="dropdown-header">Agency Demos</li> -->
                                        <li> <a class="dropdown-item" href="index.html">JTA Bojong</a> </li>
                                        <li> <a class="dropdown-item" href="index-2.html">Taman Batu</a> </li>
                                        <li> <a class="dropdown-item" href="index-3.html">Kampung Tajur<span class="badge bg-danger ms-2">Hot</span></a> </li>
                                        <li> <a class="dropdown-item" href="index-5.html">Kampung Air Tajur</a> </li>
                                        <li> <a class="dropdown-item" href="index-4.html">Kolam Renang Cihanjawar</a> </li>
                                    </ul>
                                    <ul class="list-unstyled w-100 pe-0 pe-lg-5">
                                        <!-- <li class="dropdown-header mt-3 mt-sm-0">Portfolio Demos</li> -->
                                        <li> <a class="dropdown-item" href="index-6.html">Kolam Renang Darmaga Cihanjawar</a> </li>
                                        <li> <a class="dropdown-item" href="index-7.html">Panenjoan Sindang Panon</a> </li>
                                        <li> <a class="dropdown-item" href="index-8.html">Curug Cisaruat Burangrang</a> </li>
                                        <li> <a class="dropdown-item" href="index-9.html">Kuliner</a> </li>
                                        <li> <a class="dropdown-item" href="index-10.html">Penginapan</a> </li>
                                    </ul>
                                </div>
                                <!-- Nav action box -->
                                <div class="w-100 mt-4 d-none d-lg-flex">
                                    <div class="text-center bg-primary-multiply position-relative overflow-hidden px-3 py-5 w-100">
                                        <h4 class="mb-0 text-white">Liburan Kuy!</h4>
                                        <p class=" text-white">Supaya tiis ceuli herang panon..</p>
                                        <a class="btn btn-white btn-sm" target="_blank" href="https://folio.webestica.com/landing">Kontak Kami</a>
                                        <img class="bg-primary-multiply position-absolute top-50 start-50 translate-middle z-index-n9 w-100" src="<?= base_url() ?>assets/images/bg/03.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item"> <a class="nav-link" href="contact.html">ADART</a></li>
                        <li class="nav-item"> <a class="nav-link" href="contact.html">Tentang</a></li>
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
                    <div class="nav-item d-none d-xl-block">
                        <a href="#" class="btn btn-sm btn-primary mb-0 mx-2">Get Quota !</a>
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