<?php include "includes/head.php";  ?>
   <?php include "includes/nav.php";   ?>


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
                                   <input type="text" class="form-control rounded-3" id="licenseNumber"
                                       placeholder="Enter License Number">
                                   <label for="email">License Number</label>
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