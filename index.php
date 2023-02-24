<?php include "includes/head.php";  ?>
<?php include "includes/nav.php";   ?>


<div class="main-container">

    <?php include "includes/aside.php";   ?>

    <br>
    <br>
    <br>
    <br>
    <br>
    <main>
        <div id="dashboard" class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card text-white bg-warning mb-3 card-custom">
                        <div class="card-header d-flex align-items-center">
                            <i class="fas fa-users mr-2"></i>
                            <h4 class="m-0">My Reservation</h4>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                11
                            </h5>
                            <div class="d-flex justify-content-between">
                                <a href="customers.php" class="btn btn-light card-link d-inline-block mr-2">View
                                    Details</a>
                                <a href="add_user.php" class="btn btn-light card-link d-inline-block">Edit
                                    reservation</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card text-white bg-primary mb-3 card-custom">
                        <div class="card-header d-flex align-items-center">
                            <i class="fas fa-bus d-inline-block mr-2"></i>
                            <h4 class="m-0 text-custom d-inline-block">My credits</h4>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-custom">
                                11
                            </h5>
                            <div class="d-flex justify-content-between">
                                <a href="#" class="btn btn-light card-link d-inline-block mr-2">View Details</a>
                                <a href="#" class="btn btn-light card-link d-inline-block">Give away a parking</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card text-white bg-success mb-3 card-custom">
                        <div class="card-header d-flex align-items-center">
                            <i class="fas fa-book  mr-2"></i>
                            <h4 class="m-0">Upcoming reservation</h4>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-custom">
                                11
                            </h5>
                            <div class="d-flex justify-content-between">
                                <a href="#" class="btn btn-light card-link d-inline-block mr-2">View
                                    Details</a>
                                <a href="#" class="btn btn-light card-link d-inline-block">Add Booking</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php include "includes/footer.php"; ?>