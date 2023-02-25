<?php
include "includes/head.php";

// Initialize variables to hold form data and validation errors
$email = $password = '';
$emailErr = $passwordErr = '';

$errors = array();

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Validate email
  if (empty(trim($_POST['email']))) {
    $emailErr = 'Please enter your email';
    $errors['email'] = $emailErr;
  } else {
    $email = trim($_POST['email']);
  }

  // Validate password
  if (empty(trim($_POST['password']))) {
    $passwordErr = 'Please enter your password';
    $errors['password'] = $passwordErr;
  } else {
    $password = trim($_POST['password']);
  }

  // If there are no validation errors, authenticate user and redirect to dashboard
  //if (empty($emailErr) && empty($passwordErr)) {
    if(empty($errors)){

    echo "you are in";
    // TODO: Authenticate user and redirect to dashboard
    //header('Location: dashboard.php');
    //exit;
  }
}
?>



<div class="main-container">


  <br>
  <br>
  <br>
  <br>
  <br>
  <main>
    <section>
      <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
          <div class="col-md-8 col-lg-7 col-xl-6">
            <img src="pictures\KH-korlogo-1.png" class="img-fluid" alt="Phone image">
          </div>
          <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
            <form action="login.php" method="POST">
              <!-- Email input -->
              <h1>USER LOGIN FORM</h1>

              <div class="form-outline mb-4">
                <input name="email" type="email" id="form1Example13" class="form-control form-control-lg <?php if (isset($errors['email'])) echo 'is-invalid'; ?>" />
                <label class="form-label" for="form1Example13">Email address</label>
                <?php if (isset($errors['email'])) echo '<div class="invalid-feedback">' . $errors['email'] . '</div>'; ?>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input name="password" type="password" id="form1Example23" class="form-control form-control-lg <?php if (isset($errors['password'])) echo 'is-invalid'; ?>" />
                <label class="form-label" for="form1Example23">Password</label>
                <?php if (isset($errors['password'])) echo '<div class="invalid-feedback">' . $errors['password'] . '</div>'; ?>
              </div>

              <div class="d-flex justify-content-around align-items-center mb-4">
                <!-- Checkbox -->
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                  <label class="form-check-label" for="form1Example3"> Remember me </label>
                </div>
                <a href="#!">Forgot password?</a>
              </div>

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>

              <div class="divider d-flex align-items-center my-4">
                <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
              </div>

              <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="#!" role="button">
                <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
              </a>
              <a class="btn btn-primary btn-lg btn-block" style="background-color: #55acee" href="#!" role="button">
                <i class="fab fa-twitter me-2"></i>Continue with Twitter</a>

            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>

<?php include "includes/footer.php"; ?>