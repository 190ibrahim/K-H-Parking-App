<?php include "includes/head.php"; ?>
<?php include "includes/nav.php"; ?>

<?php
$firstName = $lastName = $email = $phoneNumber = $startDate = $endDate = $startTime = $endTime = "";
$errors = array('firstName' => '', 'lastName' => '', 'email' => '', 'phoneNumber' => '', 'startDate' => '', 'endDate' => '');

if (isset($_POST['submit'])) {
    // First name validation
    if (empty($_POST['firstName'])) {
        $errors['firstName'] = 'Please enter your first name';
    } else {
        $firstName = $_POST['firstName'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $firstName)) {
            $errors['firstName'] = 'First name can only contain letters and spaces';
        }
    }

    // Last name validation
    if (empty($_POST['lastName'])) {
        $errors['lastName'] = 'Please enter your last name';
    } else {
        $lastName = $_POST['lastName'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $lastName)) {
            $errors['lastName'] = 'Last name can only contain letters and spaces';
        }
    }

    // Email validation
    if (empty($_POST['email'])) {
        $errors['email'] = 'Please enter your email address';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Invalid email address';
        }
    }

    // Phone number validation
    if (empty($_POST['phoneNumber'])) {
        $errors['phoneNumber'] = 'Please enter your phone number';
    } else {
        $phoneNumber = $_POST['phoneNumber'];
        if (!preg_match('/^[0-9]+$/', $phoneNumber)) {
            $errors['phoneNumber'] = 'Phone number can only contain numbers';
        }
    }

    // Start date validation
    if (empty($_POST['startDate'])) {
        $errors['startDate'] = 'Please select a start date';
    } else {
        $startDate = $_POST['startDate'];
        if (strtotime($startDate) < strtotime('today')) {
            $errors['startDate'] = 'Start date cannot be in the past';
        }
    }

    // End date validation
    if (empty($_POST['endDate'])) {
        $errors['endDate'] = 'Please select an end date';
    } else {
        $endDate = $_POST['endDate'];
        if (strtotime($endDate) < strtotime($startDate)) {
            $errors['endDate'] = 'End date cannot be before start date';
        }
    }
}
?>
<div class="main-container">

    <?php include "includes/aside.php"; ?>

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
                        <h1 class="fw-bold mb-0 fs-2">Reserve a parking spot</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body p-5 pt-0">
                        <form class="reservation-form" method="POST" action="">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control rounded-3" id="firstName"
                                    placeholder="First Name" name="firstName" required>
                                <label for="firstName">First Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control rounded-3" id="lastName" placeholder="Last Name"
                                    name="lastName" required>
                                <label for="lastName">Last Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control rounded-3" id="email"
                                    placeholder="name@example.com" name="email" required>
                                <label for="email">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="tel" class="form-control rounded-3" id="phoneNumber"
                                    placeholder="Phone Number" name="phoneNumber" required>
                                <label for="phoneNumber">Phone Number</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" id="startDate" name="startDate" required>
                                <label for="startDate">Start Date:</label>
                                <?php if (isset($errors['startDate'])) : ?>
                                <p class="text-danger"><?= $errors['startDate'] ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" id="endDate" name="endDate" required>
                                <label for="endDate">End Date:</label>
                                <?php if (isset($errors['endDate'])) : ?>
                                <p class="text-danger"><?= $errors['endDate'] ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="time" id="startTime" name="startTime">
                                <label for="startTime">Start Time:</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="time" id="end-time" name="end-time">
                                <label for="end-time">End Time:</label>
                            </div>
                            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Reserve</button>
                            <!-- <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small> -->
                            <hr class="my-4">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php include "includes/footer.php"; ?>