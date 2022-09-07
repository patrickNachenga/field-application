<?php
require_once('Constant.php');
include("server/database.php");
if(isset($_SESSION['user'], $_SESSION['user']['guid'])){
    header('location:'.BASE_URL.'applicant');
}
?>


<?php include("config/head.php"); ?>
<div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
<div class="container">
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
                                    <h4 class="text-dark-50 pb-0 fw-bold">Sign In</h4>
                                    <p class="text-muted mb-2">Enter your email address and password to access your Account.</p>
                                </div>

                                <form onsubmit="return login(this)">

                                    <div class="mb-2">
                                        <label for="email" class="form-label">Email address</label>
                                        <input class="form-control" type="email" name="email" required="" placeholder="Enter your Email">
                                    </div>

                                    <div class="mb-2">
                                        <a href="<?= BASE_URL ?>forgotPassword.php" class="text-muted float-end"><small>Forgot your password?</small></a>
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" name="password" class="form-control" placeholder="Enter your password">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-2 text-center" style="display:none" id="respDiv">  <?php /** -----Thee div is For Response Message */ ?> </div>

                                    <div class="col-md-4 d-grid mb-2 text-center">
                                        <button class="btn btn-sm btn- btn-primary"  id="submitButton" style="border-radius:20%" type="submit">
                                            Log In <i class="uil-sign-in-alt"></i>
                                        </button>
                                    </div>

                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">Don't have an account? <a href="<?= BASE_URL ?>signup.php" class="text-muted ms-1"><b>Sign Up</b></a></p>
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
