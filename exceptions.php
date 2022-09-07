<?php
require_once('Constant.php');

$error = isset($_SESSION['errors']['server']) ? $_SESSION['errors']['server'] : false;
?>


<?php include("config/head.php"); ?>
        <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-lg-5">
                        <div class="card">
                            <!-- Logo -->
                            
                            <div class="card-body p-4">

                                <div class="text-center">
                                    <img src="assets/images/startman.svg" height="120" alt="File not found Image">

                                    <h1 class="text-error mt-4"><?= $error ? $error['code'] : "" ?></h1>
                                    <h4 class="text-uppercase text-danger mt-3"><?= $error ? $error['header'] : "" ?></h4>
                                    <p class="text-muted mt-3">
                                        <?= $error ? $error['message'] : "" ?>
                                    </p>
                                    <a class="btn btn-info mt-3" href="<?= BASE_URL ?>"><i class="mdi mdi-reply"></i> Return Home</a>
                                </div>

                            </div> <!-- end card-body-->
                        </div>
                        <!-- end card-->
                        
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

<?php include("config/footer.php"); ?>
