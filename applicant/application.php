<?php
require_once('../Constant.php');
require_once('../Sessions.php');
include('config/head.php');
include('config/functions.php');

//get userData
$userData = userData('applicant');


?>
<!-- Begin page -->
<div class="wrapper">
    <!-- ========== Left Sidebar Start ========== -->
    <?php include('config/sideNav.php'); ?>

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">
            <!-- Topbar Start -->
            <?php include('config/header.php'); ?>
           <!-- end Topbar -->

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active"><a href="javascript: void(0);">Application</a></li>
                                </ol>
                            </div>
                            <h4 class="page-title">Application</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->


                <div class="row">
                    <div class="col-sm-12">
                        <!-- Profile -->
                        Application Page Data
                    </div> <!-- end col-->
                </div>
                <!-- end row -->


              

            </div> <!-- container -->

        </div> <!-- content -->

        <?php include('config/page-footer.php'); ?>

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->

<?php include("config/rightNav.php"); ?>
<?php include("config/page-script.php"); ?>
</body> </html>


