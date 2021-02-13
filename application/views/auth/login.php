<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login Admin</title>
  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Terekel Nekad">
  <meta name="description" content="Website Terekel Nekad">

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.ico">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Reenie+Beanie&family=Rubik:wght@400;500;700&family=Spartan:wght@400;700;900&display=swap" rel="stylesheet">

  <!-- Plugins CSS -->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendor/font-awesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css">

  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/style.css">

</head>

<body>

  <!-- Pre loader -->
  <div class="preloader">
    <img class="preloader-item" src="<?= base_url() ?>assets/images/loader/02.gif" alt="Loading">
  </div>

  <!-- **************** MAIN CONTENT START **************** -->
  <main>

    <!-- =======================
Sign in START -->
    <section class="p-0 d-flex align-items-center">
      <div class="container-fluid">
        <div class="row">
          <!-- Left START -->
          <div class="col-md-12 col-lg-4 col-xl-3 d-md-flex align-items-center bg-primary vh-lg-100">
            <div class="w-100 p-3 p-lg-5 py-5 text-white-force">
              <div class="justify-content-center align-self-center">
                <!-- Logo START -->
                <a class="navbar-brand" href="<?= base_url() ?>">
                  <!-- Logo SVG Code -->
                  <h3 class="navbar-brand-item">Terekel Nekad</h3>
                </a>
                <!-- Logo END -->
              </div>
              <h4 class="font-weight-light">We connect you with the world largest community</h4>
              <ul class="list-group list-group-borderless mt-4">
                <li class="list-group-item text-white"><i class="fas fa-check"></i>Connect with your community</li>
                <li class="list-group-item text-white"><i class="fas fa-check"></i>Discover the best experience with fellowship</li>
                <li class="list-group-item text-white"><i class="fas fa-check"></i>Create your wishlist and enjoy to best experience</li>
              </ul>
            </div>
          </div>
          <!-- Left END -->

          <!-- Right START -->
          <div class="col-md-12 col-lg-8 col-xl-9 mx-auto my-5 position-relative">
            <!-- Shape Decoration START -->
            <figure class="position-absolute start-0 bottom-0 ms-n3 d-none d-xl-block">
              <svg width="180" height="170" viewBox="0 0 117 111" xmlns="http://www.w3.org/2000/svg">
                <path class="fill-dark" d="m37.44 106.05c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42c1.33 0 2.42 1.08 2.42 2.42z" />
                <path class="fill-dark" d="m52.93 106.05c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42c1.33 0 2.42 1.08 2.42 2.42z" />
                <path class="fill-dark" d="m68.42 106.05c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42 2.42 1.08 2.42 2.42z" />
                <path class="fill-dark" d="m83.91 106.05c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42 2.42 1.08 2.42 2.42z" />
                <path class="fill-dark" d="m21.94 91.43c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42 2.42 1.08 2.42 2.42z" />
                <path class="fill-dark" d="m37.44 91.43c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42c1.33 0 2.42 1.08 2.42 2.42z" />
                <path class="fill-dark" d="m52.93 91.43c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42c1.33 0 2.42 1.08 2.42 2.42z" />
                <path class="fill-dark" d="m68.42 91.43c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42 2.42 1.08 2.42 2.42z" />
                <path class="fill-dark" d="m83.91 91.43c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42 2.42 1.08 2.42 2.42z" />
                <path class="fill-dark" d="m99.41 91.43c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42c1.33 0 2.42 1.08 2.42 2.42z" />
                <path class="fill-dark" d="m21.94 76.8c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42 2.42 1.09 2.42 2.42z" />
                <path class="fill-dark" d="m37.44 76.8c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42c1.33 0 2.42 1.09 2.42 2.42z" />
                <path class="fill-dark" d="m52.93 76.8c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42c1.33 0 2.42 1.09 2.42 2.42z" />
                <path class="fill-dark" d="m68.42 76.8c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42 2.42 1.09 2.42 2.42z" />
                <path class="fill-dark" d="m83.91 76.8c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42 2.42 1.09 2.42 2.42z" />
                <path class="fill-dark" d="m99.41 76.8c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42c1.33 0 2.42 1.09 2.42 2.42z" />
                <path class="fill-dark" d="m6.45 62.18c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42 2.42 1.09 2.42 2.42z" />
                <path class="fill-dark" d="m21.94 62.18c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42 2.42 1.09 2.42 2.42z" />
                <path class="fill-dark" d="m37.44 62.18c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42c1.33 0 2.42 1.09 2.42 2.42z" />
                <path class="fill-dark" d="m52.93 62.18c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42c1.33 0 2.42 1.09 2.42 2.42z" />
                <path class="fill-dark" d="m68.42 62.18c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42 2.42 1.09 2.42 2.42z" />
                <path class="fill-dark" d="m83.91 62.18c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42 2.42 1.09 2.42 2.42z" />
                <path class="fill-dark" d="m99.41 62.18c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42c1.33 0 2.42 1.09 2.42 2.42z" />
                <circle class="fill-dark" cx="112.48" cy="62.18" r="2.42" />
                <path class="fill-dark" d="m6.45 47.56c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42 2.42 1.08 2.42 2.42z" />
                <path class="fill-dark" d="m21.94 47.56c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42 2.42 1.08 2.42 2.42z" />
                <path class="fill-dark" d="m37.44 47.56c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42c1.33 0 2.42 1.08 2.42 2.42z" />
                <path class="fill-dark" d="m52.93 47.56c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42c1.33 0 2.42 1.08 2.42 2.42z" />
                <path class="fill-dark" d="m68.42 47.56c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42 2.42 1.08 2.42 2.42z" />
                <path class="fill-dark" d="m83.91 47.56c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42 2.42 1.08 2.42 2.42z" />
                <path class="fill-dark" d="m99.41 47.56c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42c1.33 0 2.42 1.08 2.42 2.42z" />
                <path class="fill-dark" d="m114.9 47.56c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42 2.42 1.08 2.42 2.42z" />
                <path class="fill-dark" d="m21.94 32.94c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42 2.42 1.08 2.42 2.42z" />
                <path class="fill-dark" d="m37.44 32.94c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42c1.33 0 2.42 1.08 2.42 2.42z" />
                <path class="fill-dark" d="m52.93 32.94c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42c1.33 0 2.42 1.08 2.42 2.42z" />
                <path class="fill-dark" d="m68.42 32.94c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42 2.42 1.08 2.42 2.42z" />
                <path class="fill-dark" d="m83.91 32.94c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42 2.42 1.08 2.42 2.42z" />
                <path class="fill-dark" d="m99.41 32.94c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42c1.33 0 2.42 1.08 2.42 2.42z" />
                <path class="fill-dark" d="m21.94 18.32c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42c1.34-0.01 2.42 1.08 2.42 2.42z" />
                <path class="fill-dark" d="m37.44 18.32c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42c1.33-0.01 2.42 1.08 2.42 2.42z" />
                <path class="fill-dark" d="m52.93 18.32c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42c1.33-0.01 2.42 1.08 2.42 2.42z" />
                <path class="fill-dark" d="m68.42 18.32c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42c1.34-0.01 2.42 1.08 2.42 2.42z" />
                <path class="fill-dark" d="m83.91 18.32c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42c1.34-0.01 2.42 1.08 2.42 2.42z" />
                <path class="fill-dark" d="m99.41 18.32c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42c1.33-0.01 2.42 1.08 2.42 2.42z" />
                <path class="fill-dark" d="m37.44 3.69c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42c1.33 0 2.42 1.09 2.42 2.42z" />
                <path class="fill-dark" d="m52.93 3.69c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42c1.33 0 2.42 1.09 2.42 2.42z" />
                <path class="fill-dark" d="m68.42 3.69c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42 2.42 1.09 2.42 2.42z" />
                <path class="fill-dark" d="m83.91 3.69c0 1.34-1.08 2.42-2.42 2.42s-2.42-1.08-2.42-2.42 1.08-2.42 2.42-2.42 2.42 1.09 2.42 2.42z" />
              </svg>
            </figure>
            <figure class="position-absolute end-0 top-0 d-none d-xl-block">
              <svg width="180" height="145" viewBox="0 0 410 330" xmlns="http://www.w3.org/2000/svg">
                <ellipse class="fill-primary" transform="matrix(.7071 -.7071 .7071 .7071 -60.058 144.88)" cx="144.86" cy="144.94" rx="142.86" ry="142.86" />
                <defs>
                  <circle id="round-bg-2" cx="279.27" cy="200.22" r="128.73" />
                </defs>
                <clipPath id="dots">
                  <use xlink:href="#round-bg-2" />
                </clipPath>
                <g clip-path="url(#dots)">
                  <path class="fill-dark" d="m400.15 95.9c-6.29-0.21-11.22-5.47-11.01-11.76s5.47-11.22 11.76-11.01 11.22 5.47 11.01 11.76c-0.21 6.28-5.47 11.21-11.76 11.01z" />
                  <path class="fill-dark" d="m408.57 150.8c-2.96 5.55-9.87 7.65-15.42 4.68-5.55-2.96-7.65-9.87-4.68-15.42 2.96-5.55 9.87-7.65 15.42-4.68 5.54 2.97 7.64 9.87 4.68 15.42z" />
                  <path class="fill-dark" d="m404.66 269.24c-2.96 5.55-9.87 7.65-15.42 4.68-5.55-2.96-7.65-9.87-4.68-15.42 2.96-5.55 9.87-7.65 15.42-4.68 5.55 2.96 7.65 9.86 4.68 15.42z" />
                  <path class="fill-dark" d="m406.56 211.73c-2.96 5.55-9.87 7.65-15.42 4.68-5.55-2.96-7.65-9.87-4.68-15.42 2.96-5.55 9.87-7.65 15.42-4.68s7.64 9.87 4.68 15.42z" />
                  <path class="fill-dark" d="m402.86 324.09c-2.96 5.55-9.87 7.65-15.42 4.68-5.55-2.96-7.65-9.87-4.68-15.42 2.96-5.55 9.87-7.65 15.42-4.68s7.64 9.87 4.68 15.42z" />
                </g>
                <g clip-path="url(#dots)">
                  <path class="fill-dark" d="m365.98 94.77c-6.29-0.21-11.22-5.47-11.01-11.76s5.47-11.22 11.76-11.01 11.22 5.47 11.01 11.76c-0.2 6.29-5.47 11.22-11.76 11.01z" />
                  <path class="fill-dark" d="m374.4 149.68c-2.96 5.55-9.87 7.65-15.42 4.68-5.55-2.96-7.65-9.87-4.68-15.42 2.96-5.55 9.87-7.65 15.42-4.68 5.55 2.96 7.65 9.87 4.68 15.42z" />
                  <path class="fill-dark" d="m370.5 268.11c-2.96 5.55-9.87 7.65-15.42 4.68-5.55-2.96-7.65-9.87-4.68-15.42 2.96-5.55 9.87-7.65 15.42-4.68s7.65 9.87 4.68 15.42z" />
                  <path class="fill-dark" d="m372.4 210.6c-2.96 5.55-9.87 7.65-15.42 4.68-5.55-2.96-7.65-9.87-4.68-15.42 2.96-5.55 9.87-7.65 15.42-4.68 5.54 2.97 7.64 9.87 4.68 15.42z" />
                  <path class="fill-dark" d="m368.69 322.96c-2.96 5.55-9.87 7.65-15.42 4.68-5.55-2.96-7.65-9.87-4.68-15.42 2.96-5.55 9.87-7.65 15.42-4.68s7.65 9.87 4.68 15.42z" />
                </g>
                <g clip-path="url(#dots)">
                  <path class="fill-dark" d="m331.82 93.65c-6.29-0.21-11.22-5.47-11.01-11.76s5.47-11.22 11.76-11.01 11.22 5.47 11.01 11.76c-0.2 6.28-5.47 11.21-11.76 11.01z" />
                  <path class="fill-dark" d="m340.24 148.55c-2.96 5.55-9.87 7.65-15.42 4.68s-7.65-9.87-4.68-15.42c2.96-5.55 9.87-7.65 15.42-4.68s7.64 9.87 4.68 15.42z" />
                  <path class="fill-dark" d="m336.34 266.98c-2.96 5.55-9.87 7.65-15.42 4.68-5.55-2.96-7.65-9.87-4.68-15.42 2.96-5.55 9.87-7.65 15.42-4.68s7.64 9.87 4.68 15.42z" />
                  <path class="fill-dark" d="m338.23 209.48c-2.96 5.55-9.87 7.65-15.42 4.68-5.55-2.96-7.65-9.87-4.68-15.42 2.96-5.55 9.87-7.65 15.42-4.68s7.65 9.87 4.68 15.42z" />
                  <path class="fill-dark" d="m334.53 321.83c-2.96 5.55-9.87 7.65-15.42 4.68-5.55-2.96-7.65-9.87-4.68-15.42 2.96-5.55 9.87-7.65 15.42-4.68s7.64 9.87 4.68 15.42z" />
                </g>
                <g clip-path="url(#dots)">
                  <path class="fill-dark" d="m297.66 92.52c-6.29-0.21-11.22-5.47-11.01-11.76s5.47-11.22 11.76-11.01 11.22 5.47 11.01 11.76-5.47 11.22-11.76 11.01z" />
                  <path class="fill-dark" d="m306.08 147.43c-2.96 5.55-9.87 7.65-15.42 4.68-5.55-2.96-7.65-9.87-4.68-15.42 2.96-5.55 9.87-7.65 15.42-4.68 5.54 2.96 7.64 9.87 4.68 15.42z" />
                  <path class="fill-dark" d="m302.17 265.86c-2.96 5.55-9.87 7.65-15.42 4.68-5.55-2.96-7.65-9.87-4.68-15.42 2.96-5.55 9.87-7.65 15.42-4.68s7.65 9.87 4.68 15.42z" />
                  <path class="fill-dark" d="m304.07 208.35c-2.96 5.55-9.87 7.65-15.42 4.68s-7.65-9.87-4.68-15.42c2.96-5.55 9.87-7.65 15.42-4.68s7.64 9.87 4.68 15.42z" />
                  <path class="fill-dark" d="m300.37 320.71c-2.96 5.55-9.87 7.65-15.42 4.68-5.55-2.96-7.65-9.87-4.68-15.42 2.96-5.55 9.87-7.65 15.42-4.68s7.64 9.87 4.68 15.42z" />
                </g>
                <g clip-path="url(#dots)">
                  <path class="fill-dark" d="m263.49 91.4c-6.29-0.21-11.22-5.47-11.01-11.76s5.47-11.22 11.76-11.01 11.22 5.47 11.01 11.76c-0.2 6.28-5.47 11.21-11.76 11.01z" />
                  <path class="fill-dark" d="m271.91 146.3c-2.96 5.55-9.87 7.65-15.42 4.68-5.55-2.96-7.65-9.87-4.68-15.42 2.96-5.55 9.87-7.65 15.42-4.68s7.65 9.87 4.68 15.42z" />
                  <path class="fill-dark" d="m268.01 264.73c-2.96 5.55-9.87 7.65-15.42 4.68-5.55-2.96-7.65-9.87-4.68-15.42 2.96-5.55 9.87-7.65 15.42-4.68s7.65 9.87 4.68 15.42z" />
                  <path class="fill-dark" d="m269.91 207.23c-2.96 5.55-9.87 7.65-15.42 4.68-5.55-2.96-7.65-9.87-4.68-15.42s9.87-7.65 15.42-4.68c5.54 2.96 7.64 9.87 4.68 15.42z" />
                  <path class="fill-dark" d="m266.2 319.58c-2.96 5.55-9.87 7.65-15.42 4.68-5.55-2.96-7.65-9.87-4.68-15.42 2.96-5.55 9.87-7.65 15.42-4.68s7.65 9.87 4.68 15.42z" />
                </g>
                <g clip-path="url(#dots)">
                  <path class="fill-dark" d="m229.33 90.27c-6.29-0.21-11.22-5.47-11.01-11.76s5.47-11.22 11.76-11.01 11.22 5.47 11.01 11.76c-0.2 6.29-5.47 11.22-11.76 11.01z" />
                  <path class="fill-dark" d="m237.75 145.17c-2.96 5.55-9.87 7.65-15.42 4.68-5.55-2.96-7.65-9.87-4.68-15.42 2.96-5.55 9.87-7.65 15.42-4.68s7.64 9.87 4.68 15.42z" />
                  <path class="fill-dark" d="m233.85 263.61c-2.96 5.55-9.87 7.65-15.42 4.68-5.55-2.96-7.65-9.87-4.68-15.42 2.96-5.55 9.87-7.65 15.42-4.68 5.55 2.96 7.64 9.87 4.68 15.42z" />
                  <path class="fill-dark" d="m235.74 206.1c-2.96 5.55-9.87 7.65-15.42 4.68-5.55-2.96-7.65-9.87-4.68-15.42 2.96-5.55 9.87-7.65 15.42-4.68s7.65 9.87 4.68 15.42z" />
                  <path class="fill-dark" d="m232.04 318.46c-2.96 5.55-9.87 7.65-15.42 4.68-5.55-2.96-7.65-9.87-4.68-15.42 2.96-5.55 9.87-7.65 15.42-4.68 5.55 2.96 7.65 9.87 4.68 15.42z" />
                </g>
                <g clip-path="url(#dots)">
                  <path class="fill-dark" d="m195.17 89.14c-6.29-0.21-11.22-5.47-11.01-11.76s5.47-11.22 11.76-11.01 11.22 5.47 11.01 11.76-5.47 11.22-11.76 11.01z" />
                  <path class="fill-dark" d="m203.59 144.05c-2.96 5.55-9.87 7.65-15.42 4.68-5.55-2.96-7.65-9.87-4.68-15.42 2.96-5.55 9.87-7.65 15.42-4.68s7.64 9.87 4.68 15.42z" />
                  <path class="fill-dark" d="m199.68 262.48c-2.96 5.55-9.87 7.65-15.42 4.68-5.55-2.96-7.65-9.87-4.68-15.42 2.96-5.55 9.87-7.65 15.42-4.68s7.65 9.87 4.68 15.42z" />
                  <path class="fill-dark" d="m201.58 204.98c-2.96 5.55-9.87 7.65-15.42 4.68-5.55-2.96-7.65-9.87-4.68-15.42 2.96-5.55 9.87-7.65 15.42-4.68 5.55 2.96 7.64 9.87 4.68 15.42z" />
                  <path class="fill-dark" d="m197.88 317.33c-2.96 5.55-9.87 7.65-15.42 4.68-5.55-2.96-7.65-9.87-4.68-15.42 2.96-5.55 9.87-7.65 15.42-4.68s7.64 9.87 4.68 15.42z" />
                </g>
                <g clip-path="url(#dots)">
                  <path class="fill-dark" d="m161.01 88.02c-6.29-0.21-11.22-5.47-11.01-11.76s5.47-11.22 11.76-11.01 11.22 5.47 11.01 11.76-5.48 11.22-11.76 11.01z" />
                  <path class="fill-dark" d="m169.42 142.92c-2.96 5.55-9.87 7.65-15.42 4.68-5.55-2.96-7.65-9.87-4.68-15.42 2.96-5.55 9.87-7.65 15.42-4.68s7.65 9.87 4.68 15.42z" />
                  <path class="fill-dark" d="m165.52 261.36c-2.96 5.55-9.87 7.65-15.42 4.68-5.55-2.96-7.65-9.87-4.68-15.42 2.96-5.55 9.87-7.65 15.42-4.68 5.55 2.96 7.65 9.87 4.68 15.42z" />
                  <path class="fill-dark" d="m167.42 203.85c-2.96 5.55-9.87 7.65-15.42 4.68-5.55-2.96-7.65-9.87-4.68-15.42 2.96-5.55 9.87-7.65 15.42-4.68 5.54 2.97 7.64 9.87 4.68 15.42z" />
                  <path class="fill-dark" d="m163.71 316.21c-2.96 5.55-9.87 7.65-15.42 4.68-5.55-2.96-7.65-9.87-4.68-15.42 2.96-5.55 9.87-7.65 15.42-4.68 5.55 2.96 7.65 9.87 4.68 15.42z" />
                </g>
              </svg>
            </figure>
            <!-- Shape Decoration END -->
            <div class="row h-100">
              <div class="col-md-12 col-lg-10 col-xl-5 text-start mx-auto d-flex align-items-center">
                <div class="w-100">
                  <h3><?php echo lang('login_heading'); ?></h3>
                  <p><?php echo lang('login_subheading'); ?></p>
                  <!-- <h3>Login in to your account!</h3>
                  <p>Nice to see you! Please log in with your account.</p> -->
                  <div id="infoMessage" class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong><?php echo $message; ?></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  <!-- Form START -->
                  <?php echo form_open("auth/login"); ?>
                  <!-- Email -->
                  <div class="mb-3">
                    <label class="form-label" for="identity">Email/Username</label>
                    <?php echo form_input($identity); ?>
                  </div>
                  <!-- Password -->
                  <div class="mb-3">
                    <label class="form-label" for="pasword">Password</label>
                    <?php echo form_input($password); ?>
                  </div>
                  <!-- Checkbox -->
                  <div class="mb-3 form-check">
                    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"', 'class="form-check-input"'); ?>
                    <label class="form-check-label" for="remember"><?php echo lang('login_remember_label', 'remember'); ?></label>

                  </div>
                  <!-- Button -->
                  <div class="row align-items-center">
                    <div class="col-sm-4 text-white">
                      <?php echo form_submit('submit', lang('login_submit_btn'), array('class' => 'btn btn-success btn-line')); ?>
                    </div>
                    <div class="col-sm-8 text-sm-end">
                      <span class="text-muted"><a href="<?= base_url() ?>auth/forgot_password" class="text-center"><?= lang('login_forgot_password'); ?></a></span>
                    </div>
                  </div>
                  <?php echo form_close(); ?>
                  <!-- Form END -->
                </div>
              </div>
            </div>
          </div>
          <!-- Right END -->
        </div>
      </div>
    </section>
    <!-- =======================
Sign in END -->

  </main>
  <!-- **************** MAIN CONTENT END **************** -->

  <!-- Custom cursor -->
  <div class="cursor-dot-outline"></div>
  <div class="cursor-dot"></div>

  <!-- =======================
JS libraries, plugins and custom scripts -->

  <!-- Bootstrap JS -->
  <script src="<?= base_url() ?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Template Functions -->
  <script src="<?= base_url() ?>assets/js/functions.js"></script>

</body>

</html>