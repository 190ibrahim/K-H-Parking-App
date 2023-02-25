<?php
include "includes/head.php";
include "includes/nav.php";

$errors = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate first name
    if (empty($_POST["firstName"])) {
        $errors["firstName"] = "Please enter your first name.";
    } else {
        $firstName = $_POST["firstName"];
    }

    // Validate last name
    if (empty($_POST["lastName"])) {
        $errors["lastName"] = "Please enter your last name.";
    } else {
        $lastName = $_POST["lastName"];
    }

    // Validate license number
    if (empty($_POST["licenseNumber"])) {
        $errors["licenseNumber"] = "Please enter your license number.";
    } else {
        $licenseNumber = $_POST["licenseNumber"];
    }

    // Validate email
    if (empty($_POST["email"])) {
        $errors["email"] = "Please enter your email address.";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Please enter a valid email address.";
    } else {
        $email = $_POST["email"];
    }

    // Validate phone number
    if (empty($_POST["phoneNumber"])) {
        $errors["phoneNumber"] = "Please enter your phone number.";
    } else {
        $phoneNumber = $_POST["phoneNumber"];
    }

    // Validate reason for visit
    if (empty($_POST["reasonForVisit"])) {
        $errors["reasonForVisit"] = "Please enter the reason for your visit.";
    } else {
        $reasonForVisit = $_POST["reasonForVisit"];
    }

    // If there are no errors, redirect to success page
    if (empty($errors)) {
        header("Location: success.php");
        exit;
    }
}
?>


<div class="main-container">

    <?php include "includes/aside.php";   ?>

    <br>
    <br>
    <br>
    <br>
    <br>

    <main class="d-flex justify-content-center align-items-center">
        <div class="modal modal-signin d-block py-5" tabindex="-1" role="dialog" id="modalSignin">
            <div class="modal-dialog" role="document">
                <div class="modal-content rounded-4 shadow">
                    <div class="modal-header p-5 pb-4 border-bottom-0">
                        <!-- <h1 class="modal-title fs-5" >Modal title</h1> -->
                        <h1 class="fw-bold mb-0 fs-2">Sign up for free</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    </div>

                    <div class="modal-body p-5 pt-0">
                        <form class="">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control rounded-3 <?php if (isset($errors['firstName'])) echo 'is-invalid'; ?>" id="firstName" placeholder="First Name" name="firstName" value="<?php if (isset($_POST['firstName'])) echo htmlspecialchars($_POST['firstName']); ?>">
                                <label for="firstName">First Name</label>
                                <?php if (isset($errors['firstName'])) echo '<div class="invalid-feedback">' . $errors['firstName'] . '</div>'; ?>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control rounded-3 <?php if (isset($errors['lastName'])) echo 'is-invalid'; ?>" id="lastName" placeholder="Last Name" name="lastName" value="<?php if (isset($_POST['lastName'])) echo htmlspecialchars($_POST['lastName']); ?>">
                                <label for="lastName">Last Name</label>
                                <?php if (isset($errors['lastName'])) echo '<div class="invalid-feedback">' . $errors['lastName'] . '</div>'; ?>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control rounded-3 <?php if (isset($errors['licenseNumber'])) echo 'is-invalid'; ?>" id="licenseNumber" placeholder="License Number" name="licenseNumber" value="<?php if (isset($_POST['licenseNumber'])) echo htmlspecialchars($_POST['licenseNumber']); ?>">
                                <label for="email">License Number</label>
                                <?php if (isset($errors['licenseNumber'])) echo '<div class="invalid-feedback">' . $errors['licenseNumber'] . '</div>'; ?>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control rounded-3 <?php if (isset($errors['email'])) echo 'is-invalid'; ?>" id="email" placeholder="Email" name="email" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
                                <label for="email">Email address</label>
                                <?php if (isset($errors['email'])) echo '<div class="invalid-feedback">' . $errors['email'] . '</div>'; ?>
                            </div>


                            <div class="form-floating mb-3">
                                <input type="tel" class="form-control rounded-3 <?php if (isset($errors['phoneNumber'])) echo 'is-invalid'; ?>" id="phoneNumber" placeholder="Phone Number" name="phoneNumber" value="<?php if (isset($_POST['phoneNumber'])) echo htmlspecialchars($_POST['phoneNumber']); ?>">
                                <label for="phoneNumber">Phone Number</label>
                                <?php if (isset($errors['phoneNumber'])) echo '<div class="invalid-feedback">' . $errors['phoneNumber'] . '</div>'; ?>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Reason for Vist</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>



                            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Sign
                                up</button>
                            <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
                            <hr class="my-4">
                            <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>
                            <button class="w-100 py-2 mb-2 btn btn-outline-dark rounded-3" type="submit">
                                <svg class="bi me-1" width="16" height="16">
                                    <use xlink:href="#twitter" />
                                </svg>
                                Sign up with Twitter
                            </button>
                            <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit">
                                <svg class="bi me-1" width="16" height="16">
                                    <use xlink:href="#facebook" />
                                </svg>
                                Sign up with Facebook
                            </button>
                            <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
                                <svg class="bi me-1" width="16" height="16">
                                    <use xlink:href="#github" />
                                </svg>
                                Sign up with GitHub
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php include "includes/footer.php"; ?>