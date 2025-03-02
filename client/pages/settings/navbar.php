<!-- Desktop Sidebar -->
<div class="navbar col-md-2 d-none d-md-flex flex-column align-items-start justify-content-start bg-dark px-4">
    <div class="go-home w-100">
        <a href="../home/" class="text-decoration-none text-white fs-4 px-3">
            <i class="bi bi-arrow-left text-white fs-4 "></i> home
        </a>
    </div>
    <div class="nav-options d-md-flex text-white mt-5 w-100">
        <ul class="list-unstyled">
            <a href="./index.php">
                <li class="pt-2 pb-2 fs-4 account"><i class="bi bi-person px-2"></i> Account</li>
            </a>

            <a href="./security.php">
                <li class="pt-2 pb-2 fs-4"><i class="bi bi-lock px-2"></i> Security</li>
            </a>
            <a href="">
                <li class="pt-2 pb-2 fs-4"><i class="bi bi-shield-fill-check px-2"></i> Privacy</li>
            </a>
            <a href="">
                <li class="pt-2 pb-2 fs-4"><i class="bi bi-info-lg px-2"></i> About Us</li>
            </a>
        </ul>
    </div>
</div>

<!-- mobile navbar -->
<nav class="navbar navbar-expand-md bg-dark text-white col-12 d-md-none w-100 p-0 overflow-y-hide" style="height: 8%;">
    <div class="container-fluid p-0 w-100">
        <a class="navbar-brand text-white px-2" href="#"><i class="bi bi-arrow-left text-white fs-4 "></i> home</a>

        <!-- Hamburger Menu Button (White Color Fix) -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
            style="filter: invert(1);">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible Menu -->
        <div class="collapse navbar-collapse bg-dark text-white w-100" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex justify-content-center align-items-center mb-2 mb-lg-0 w-100">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><i class="bi bi-person px-2"></i> Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="./security.php">
                        <i class="bi bi-lock px-2"></i> Security
                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link text-white"><i class="bi bi-shield-fill-check px-2"></i> Privacy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white"><i class="bi bi-info-lg px-2"></i> About Us</a>
                </li>
            </ul>

        </div>
    </div>
</nav>