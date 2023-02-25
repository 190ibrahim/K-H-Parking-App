<?php
include "includes/head.php";
include "includes/nav.php";

$firstName = "";
$lastName = "";
$email = "";
$password = "";
$confirmPassword = "";
$phoneNumber = "";
$firstNameErr = "";
$lastNameErr = "";
$emailErr = "";
$passwordErr = "";
$confirmPasswordErr = "";
$phoneNumberErr = "";
$validForm = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = test_input($_POST["firstName"]);
    if (empty($firstName)) {
        $firstNameErr = "First name is required";
        $validForm = false;
    }

    $lastName = test_input($_POST["lastName"]);
    if (empty($lastName)) {
        $lastNameErr = "Last name is required";
        $validForm = false;
    }

    $email = test_input($_POST["email"]);
    if (empty($email)) {
        $emailErr = "Email is required";
        $validForm = false;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
        $validForm = false;
    }

    $password = test_input($_POST["password"]);
    if (empty($password)) {
        $passwordErr = "Password is required";
        $validForm = false;
    }

    $confirmPassword = test_input($_POST["confirmPassword"]);
    if (empty($confirmPassword)) {
        $confirmPasswordErr = "Confirm password is required";
        $validForm = false;
    } elseif ($confirmPassword != $password) {
        $confirmPasswordErr = "Passwords do not match";
        $validForm = false;
    }

    $phoneNumber = test_input($_POST["phoneNumber"]);
    if (!empty($phoneNumber) && !preg_match("/^[0-9]{10}$/", $phoneNumber)) {
        $phoneNumberErr = "Invalid phone number";
        $validForm = false;
    }

    if ($validForm) {
        // Do something with the form data, such as save it to a database
        // and redirect to a success page
        header("Location: success.php");
        exit();
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
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
                        <form action="signUp.php" method="POST" class="">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control rounded-3" id="firstName" name="firstName" placeholder="First Name" value="<?php echo $firstName; ?>">
                                <label for="firstName">First Name</label>
                                <span class="error"><?php echo  $firstNameErr; ?></span>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control rounded-3" id="lastName" name="lastName" placeholder="Last Name" value="<?php echo $lastName; ?>">
                                <label for="lastName">Last Name</label>
                                <span class="error"><?php echo $lastNameErr; ?></span>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control rounded-3" id="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
                                <label for="email">Email address</label>
                                <span class="error"><?php echo $emailErr; ?></span>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control rounded-3" id="password" name="password" placeholder="Password">
                                <label for="password">Password</label>
                                <span class="error"><?php echo $passwordErr; ?></span>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control rounded-3" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password">
                                <label for="confirmPassword">Confirm Password</label>
                                <span class="error"><?php echo $confirmPasswordErr; ?></span>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="tel" class="form-control rounded-3" id="phoneNumber" placeholder="Phone Number">
                                <label for="phoneNumber">Phone Number</label>
                                <span class="error"><?php echo $phoneNumberErr; ?></span>
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