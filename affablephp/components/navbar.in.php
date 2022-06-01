<nav class="navbar navbar-expand-lg fixed-top background-change">
        <div class="container">
            <a class="navbar-brand" href="#" style="color:aliceblue;">Affable Infotech I.T.C</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center">
                <ul class="navbar-nav">
                    <li class="nav-item active" data-bs-dismiss="offcanvas">
                        <a class="nav-link " href="index.php">Home</a>
                    </li>
                    <li class="nav-item active" data-bs-dismiss="offcanvas">
                        <a class="nav-link " href="services.php">Services</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Overview
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" data-bs-dismiss="offcanvas">
                            <li><a class="dropdown-item active" href="about.in.php">About Us</a></li>
                            <li><a class="dropdown-item active" href="profile.php?file=InnovizProfile.pdf">Company Profile</a></li>
                        </ul>
                    </li>
                    <li class="nav-item active" data-bs-dismiss="offcanvas">
                        <a class="nav-link " href="contact.in.php">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="offcanvas offcanvas-end justify-content-center canvas-background-change" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                        <img [src]="'./assets/images/logo.png'" width="100" alt="" /><b>Affable Infotech
                            I.T.C</b>
                    </h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body ">
                    <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
                        <li class="nav-item" data-bs-dismiss="offcanvas">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item" data-bs-dismiss="offcanvas">
                            <a class="nav-link" href="services.php">Services</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Overview
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" data-bs-dismiss="offcanvas">
                                <li><a class="dropdown-item" href="about.in.php">About Us</a></li>
                                <li><a class="dropdown-item" href="profile.php?file=InnovizProfile.pdf">Company Profile</a></li>
                            </ul>
                        </li>
                        <li class="nav-item" data-bs-dismiss="offcanvas">
                            <a class="nav-link" href="contact.in.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>