<body>

    <!-- **************** MAIN CONTENT START **************** -->
    <main>
        <!-- Navbar top START -->
        <div class="navbar-top bg-dark px-3 px-sm-4 px-md-5">
            <div class="d-flex justify-content-between align-items-center">
                <!-- Logo -->
                <a class="navbar-brand d-flex align-items-center py-3" href="<?= base_url('admin/dashboard') ?>">
                    <!-- Logo SVG Code -->
                    <h3 class="text-white">Admin</h3>
                    <span class="text-body d-sm-block h-100 mx-2"> | Panel</span>
                </a>

                <!-- Navbar right -->
                <div>
                    <ul class="text-right list-inline m-0">
                        <li class="list-inline-item me-1 me-md-1"> <a class="btn btn-sm btn-primary text-white" href="<?= base_url('auth/logout') ?>"><i class="far fa-user me-2"></i>Logout</a> </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Navbar top END -->