<?php
require_once('../Constant.php');
require_once('../Sessions.php');
include('server/database.php');
include('config/head.php');
include('config/functions.php');


//get user data
$userData = userData('staff');


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
                                    <li class="breadcrumb-item active"><a href="javascript: void(0);">Dashboard</a></li>
                                </ol>
                            </div>
                            <h4 class="page-title">Dashboard</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card widget-inline">
                            <div class="card-body p-0">
                                <div class="row g-0">
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card shadow-none m-0">
                                            <div class="card-body text-center">
                                                <i class="dripicons-briefcase text-muted" style="font-size: 24px;"></i>
                                                <h3><span>29</span></h3>
                                                <p class="text-muted font-15 mb-0">Total Department</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card shadow-none m-0 border-start">
                                            <div class="card-body text-center">
                                                <i class="dripicons-checklist text-muted" style="font-size: 24px;"></i>
                                                <h3><span>715</span></h3>
                                                <p class="text-muted font-15 mb-0">Total Application</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card shadow-none m-0 border-start">
                                            <div class="card-body text-center">
                                                <i class="dripicons-user-group text-muted" style="font-size: 24px;"></i>
                                                <h3><span>31</span></h3>
                                                <p class="text-muted font-15 mb-0">Applicants</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card shadow-none m-0 border-start">
                                            <div class="card-body text-center">
                                                <i class="dripicons-graph-line text-muted" style="font-size: 24px;"></i>
                                                <h3><span>57%</span> <i class="mdi mdi-arrow-up text-success"></i></h3>
                                                <p class="text-muted font-15 mb-0">Progress</p>
                                            </div>
                                        </div>
                                    </div>

                                </div> <!-- end row -->
                            </div>
                        </div> <!-- end card-box-->
                    </div> <!-- end col-->
                </div>
                <!-- end row-->

                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="card  tilebox-one">
                            <div class="card-body">
                                <h4 class="header-title mt-1 mb-3">Application Traffic</h4>

                                <div class="table-responsive">
                                    <table class="table table-sm table-centered mb-0 font-14">
                                        <thead class="table-light">
                                        <tr>
                                            <th>Department</th>
                                            <th>Application</th>
                                            <th style="width: 40%;"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Direct</td>
                                            <td>2,050</td>
                                            <td>
                                                <div class="progress" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar"
                                                         style="width: 65%; height: 20px;" aria-valuenow="65"
                                                         aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Organic Search</td>
                                            <td>1,405</td>
                                            <td>
                                                <div class="progress" style="height: 3px;">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                         style="width: 45%; height: 20px;" aria-valuenow="45"
                                                         aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Refferal</td>
                                            <td>750</td>
                                            <td>
                                                <div class="progress" style="height: 3px;">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                         style="width: 30%; height: 20px;" aria-valuenow="30"
                                                         aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Social</td>
                                            <td>540</td>
                                            <td>
                                                <div class="progress" style="height: 3px;">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                         style="width: 25%; height: 20px;" aria-valuenow="25"
                                                         aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-8 col-lg-7">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-3">Recent Application</h4>

                                <p><b>107</b> Tasks completed out of 195</p>

                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap table-hover mb-0">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <h5 class="font-14 my-1"><a href="javascript:void(0);" class="text-body">Coffee detail page - Main Page</a></h5>
                                                <span class="text-muted font-13">Due in 3 days</span>
                                            </td>
                                            <td>
                                                <span class="text-muted font-13">Status</span> <br/>
                                                <span class="badge badge-warning-lighten">In-progress</span>
                                            </td>
                                            <td>
                                                <span class="text-muted font-13">Assigned to</span>
                                                <h5 class="font-14 mt-1 fw-normal">Logan R. Cohn</h5>
                                            </td>
                                            <td>
                                                <span class="text-muted font-13">Total time spend</span>
                                                <h5 class="font-14 mt-1 fw-normal">3h 20min</h5>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div>
                </div>



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


