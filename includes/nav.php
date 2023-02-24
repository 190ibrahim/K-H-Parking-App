<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="../pictures/icon.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                    K&H Parking
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Sign Up</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                UserName
                                <img src="../pictures/icon.png" alt="Profile picture" class="rounded-circle me-2" width="30" height="30">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- <div class="b-example-divider b-example-vr"></div> -->

    <aside class="d-flex flex-column flex-shrink-0 bg-light  fixed-left" style="width: 4.5rem; height: 100vh;">
        <!-- <a href="/" class="d-block p-3 link-dark text-decoration-none" title="Icon-only" data-bs-toggle="tooltip"
            data-bs-placement="right">
            <svg class="bi pe-none" width="40" height="32">
                <use xlink:href="#bootstrap" />
            </svg>
            <span class="visually-hidden">Icon-only</span>
        </a> -->
        <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
            <!-- //with php controll aria-current="page" -->
            <li class="nav-item">
                <a href="http://localhost/frontend/#" class="nav-link py-3 border-bottom rounded-0" aria-current="page" title="Tasks" data-bs-toggle="tooltip" data-bs-placement="right">
                    <span class="fas fa-fw fa-duotone fa-clipboard-list bi pe-none"></span>
                </a>



            </li>
            <li>
                <a href="#" class="nav-link py-3 border-bottom rounded-0" title="Completed" data-bs-toggle="tooltip" data-bs-placement="right">
                    <span class="fas fa-fw fas fa-check-circle bi pe-none"></span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link py-3 border-bottom rounded-0" title="Uncompleted" data-bs-toggle="tooltip" data-bs-placement="right">
                    <span class="fas fa-fw  fas fa-times-circle bi pe-none"></span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link py-3 border-bottom rounded-0" title="Archived" data-bs-toggle="tooltip" data-bs-placement="right">
                    <span class="fas fa-fw fa-solid fa-box-archive bi pe-none"></span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link py-3 border-bottom rounded-0" title="Trash" data-bs-toggle="tooltip" data-bs-placement="right">
                    <span class="fas fa-fw fa-trash-alt bi pe-none"></span>
                </a>
            </li>
        </ul>
    </aside>