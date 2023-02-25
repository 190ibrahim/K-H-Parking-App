<?php include "includes/head.php";  ?>
<?php include "includes/nav.php";   ?>


<div class="main-container">

    <?php include "includes/aside.php";   ?>

    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- <main>
    
    <form class="reservation">
		<h2>Reserve your parking space</h2>
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" placeholder="Enter your name" required>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" placeholder="Enter your email" required>
		<label for="phone">Phone:</label>
		<input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
		<label for="start-date">Start Date:</label>
		<input type="date" id="start-date" name="start-date" required>
		<label for="end-date">End Date:</label>
		<input type="date" id="end-date" name="end-date" required>
        <label for="start-time">Start Time:</label>
        <input type="time" id="start-time" name="start-time">
        <label for="end-time">End Time:</label>
        <input type="time" id="end-time" name="end-time">

		<input type="submit" value="Submit">
	</form>

    </main> -->
    <main class="d-flex justify-content-center align-items-center">
           <div class="modal modal-signin d-block py-5" tabindex="-1" role="dialog" id="modalSignin">
               <div class="modal-dialog" role="document">
                   <div class="modal-content rounded-4 shadow">
                       <div class="modal-header p-5 pb-4 border-bottom-0">
                           <!-- <h1 class="modal-title fs-5" >Modal title</h1> -->
                           <h1 class="fw-bold mb-0 fs-2">Reserve a parking spot</h1>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                       </div>

                       <div class="modal-body p-5 pt-0">
                           <form class="">
                               <div class="form-floating mb-3">
                                   <input type="text" class="form-control rounded-3" id="firstName"
                                       placeholder="First Name">
                                   <label for="firstName">First Name</label>
                               </div>
                               <div class="form-floating mb-3">
                                   <input type="text" class="form-control rounded-3" id="lastName"
                                       placeholder="Last Name">
                                   <label for="lastName">Last Name</label>
                               </div>
                               <div class="form-floating mb-3">
                                   <input type="email" class="form-control rounded-3" id="email"
                                       placeholder="name@example.com">
                                   <label for="email">Email address</label>
                               </div>
                               <div class="form-floating mb-3">
                                   <input type="tel" class="form-control rounded-3" id="phoneNumber"
                                       placeholder="Phone Number">
                                   <label for="phoneNumber">Phone Number</label>
                               </div>
                               <div class="form-floating mb-3">
                                    <input type="date" id="start-date" name="start-date" required>
                                    <label for="start-date">Start Date:</label>
                               </div>
                               <div class="form-floating mb-3">
                                    <input type="date" id="end-date" name="end-date" required>
                                    <label for="end-date">End Date:</label>
                                </div>
                               <div class="form-floating mb-3">
                                    <input type="time" id="start-time" name="start-time">
                                    <label for="start-time">Start Time:</label>
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