<?php
require_once('Constant.php');
include("server/database.php");

if(isset($_SESSION['user'], $_SESSION['user']['guid'])){
    header('location:'.BASE_URL.'applicant');
}

?>


<?php include("config/head.php"); ?>
<div class="account-pages pt-2 pt-sm-4 pb-3 pb-sm-4">
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-xxl-4 col-md-4 col-lg-5">
                <div class="card" style="border: 4px solid rgba(10,106,161,0.19)">

                    <!-- Logo -->
                    <div class="card-header pt-2 pb-2 text-center">
                        <a href="#">
                            <h3 class="text-primary">PTA-FIELD APPLICATION</h3>
                        </a>
                    </div>

                    <div class="card-body p-2">

                        <div class=" w-80">
                            <h4 class="text-dark-50 pb-0 fw-bold">Applicant Registration</h4>
                            <p class="text-muted mb-2">Enter your Details to Open new Account as Applicant.</p>
                        </div>

                        <form autocomplete="off" onsubmit="return signup(this)">

                            <div class="mb-2">
                                <label for="" class="form-label">First Name</label>
                                <input type="text" name="firstName" class="form-control"  placeholder="First Name" title="Enter your First Name" required="">
                            </div>

                            <div class="mb-2">
                                <label for="" class="form-label">Last Name</label>
                                <input type="text" name="lastName"  class="form-control"   placeholder="Last Name" title="Enter your Last Name" required="">
                            </div>

                            <div class="mb-2">
                                <label for="" class="form-label" >Gender</label>
                                <select name="gender"  title="Choose your gender" required="" class="form-control" >
                                    <option value="">Select your gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>

                            <div class="mb-2">
                                <label for="" class="form-label">Email</label>
                                <input type="email" name="emailAddress"  class="form-control"   placeholder="Email" title="Enter your Email" required="">
                            </div>

                            <div class="mb-2">
                                <label for="" class="form-label">Contact</label>
                                <input type="text" name="contact" class="form-control" title="Enter your phone number start with 0" required="">
                            </div>


                            <div class="mb-2">
                                <label for="" class="form-label">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" name="password" class="form-control form-control-sm" placeholder="Enter your password">
                                    <div class="input-group-text" data-password="false">
                                        <span class="password-eye"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-2">
                                <label for="" class="form-label">Confirm Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" name="confirmPassword" class="form-control form-control-sm" placeholder="Confirm password">
                                    <div class="input-group-text" data-password="false">
                                        <span class="password-eye"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-2 text-center" style="display:none" id="respDiv">  <?php /** -----Thee div is For Response Message */ ?> </div>

                            <div class="col-md-4 d-grid mb-2 text-center">
                                <button class="btn btn-sm btn- btn-primary" id="submitButton"  style="border-radius:20%" type="submit">
                                    Sign Up <i class="uil-sign-out-alt"></i>
                                </button>
                            </div>

                        </form>
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p class="text-muted">Already have account? <a href="<?= BASE_URL ?>index.php" class="text-muted ms-1"><b>Log In</b></a></p>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->

<?php include("config/footer.php"); ?>
