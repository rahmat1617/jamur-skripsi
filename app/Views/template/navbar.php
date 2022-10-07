<!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center">
            <h2 class="m-0"><img src="img/logo.png" alt="logo" style="width: 48px;height:48px;"> Jamur Skripsi</h2>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-3 py-lg-0">
                <a href="<?= base_url(); ?>/" class="nav-item nav-link">Home</a>
                <a href="<?= base_url(); ?>/main/aboutus" class="nav-item nav-link">About Us</a>
                <a href="<?= base_url(); ?>/main/order" class="nav-item nav-link">Order</a>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Join Us</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="feature.html" class="dropdown-item">Log In</a>
                        <a href="appointment.html" class="dropdown-item">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
<!-- Navbar End -->