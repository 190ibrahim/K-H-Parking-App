<?php include "includes/head.php";  ?>

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
            <img src="pictures/KH-korlogo-1.png" class="img-fluid" alt="Contact Us Image">
          </div>
          <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
            <form>
              <h1>Contact Us</h1>
              <p>Feel free to contact us with any questions or concerns.</p>
              <div class="form-outline mb-4">
                <input type="text" id="form1Example1" class="form-control form-control-lg" />
                <label class="form-label" for="form1Example1">Name</label>
              </div>
              <div class="form-outline mb-4">
                <input type="email" id="form1Example2" class="form-control form-control-lg" />
                <label class="form-label" for="form1Example2">Email address</label>
              </div>
              <div class="form-outline mb-4">
                <textarea id="form1Example3" class="form-control form-control-lg" rows="4"></textarea>
                <label class="form-label" for="form1Example3">Message</label>
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