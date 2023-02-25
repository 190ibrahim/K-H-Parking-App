<?php
include "includes/head.php";

// Initialize variables for form input and error messages
$name = $email = $message = "";
$nameErr = $emailErr = $messageErr = "";

// Process form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Validate name field
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // Check that name contains only letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  // Validate email field
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // Check if email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  // Validate message field
  if (empty($_POST["message"])) {
    $messageErr = "Message is required";
  } else {
    $message = test_input($_POST["message"]);
  }

  // If there are no errors, send the message
  if ($nameErr == "" && $emailErr == "" && $messageErr == "") {
    // Code to send the message goes here
    // ...
    // Redirect to a thank you page or display a success message
    header("Location: thank-you.php");
    exit();
  }
}

// Function to sanitize user input
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
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
            <img src="pictures/contact-us-image.png" class="img-fluid" alt="Contact Us Image">
          </div>
          <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
              <h1>Contact Us</h1>
              <p>Feel free to contact us with any questions or concerns.</p>
              <div class="form-outline mb-4">
                <input type="text" id="name" name="name" class="form-control form-control-lg" value="<?php echo htmlspecialchars($name); ?>" />
                <label class="form-label" for="name">Name</label>
                <span class="error"><?php echo $nameErr; ?></span>
              </div>
              <div class="form-outline mb-4">
                <input type="email" id="email" name="email" class="form-control form-control-lg" value="<?php echo htmlspecialchars($email); ?>" />
                <label class="form-label" for="email">Email address</label>
                <span class="error"><?php echo $emailErr; ?></span>
              </div>
              <div class="form-outline mb-4">
                <textarea id="message" name="message" class="form-control form-control-lg" rows="4"><?php echo htmlspecialchars($message); ?></textarea>
                <label class="form-label" for="message">Message</label>
                <span class="error"><?php echo $messageErr; ?></span>
              </div>
              <button type="submit" class="btn btn-primary btn-lg btn-block">Send Message</button>

            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>

<?php include "includes/footer.php"; ?>