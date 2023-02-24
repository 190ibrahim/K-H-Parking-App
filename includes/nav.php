<body>
    <nav class="navbar navbar-expand-lg bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="../pictures/icon.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                K&H Parking
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <a class="nav-link" href="#"> Reserve</a>
                </ul>
                <ul class="navbar-nav">
                    <a class="nav-link" href="#"> My Reservation</a>
                </ul>
                <ul class="navbar-nav">
                    <a class="nav-link" href="#"> Contact us </a>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.php">Register</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            UserName
                            <img src="../pictures/icon.png" alt="Profile picture" class="rounded-circle me-2" width="30" height="30">
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a class="nav-link profile-link" href="profile.php?profile_id=<?php echo $_SESSION['user_id']; ?>">
                                    <i class="fas fa-user"></i> Profile
                                </a>
                            </li>
                            <li class="nav-item"><a class="nav-link profile-link" href="#"><i class="fas fa-cog"></i>
                                    Settings</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="nav-item">
                                <a class="nav-link profile-link" href="logout.php">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>