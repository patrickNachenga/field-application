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
                                    <li class="breadcrumb-item active"><a href="javascript: void(0);">add department</a></li>
                                </ol>
                            </div>
                            <h4 class="page-title">Department</h4>
                        </div>
                    </div>
                    <div class="col-10">
                        <div id="errorDiv" style="display:none" class="alert alert-success alert-dismissible fade show m-3 " role="alert">
                            <button type="button" class="btn-close" onclick="this.parent.jQuery.hide()"></button>
                            <i class="dripicons-checkmark me-2"></i>
                            <span>message</span>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-8">
                        <div class="card card-primary">
                            <div class="card-header card-pricing">
                                <h4 class="header-title"> Add New Department</h4>
                            </div>
                            <div class="card-body  pt-3">
                                <form class="needs-validation" novalidate onsubmit="return addDepartment(this)">
                                    <div class="tab-content b-0 mb-0">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row mb-3">
                                                        <label class="col-md-3 col-form-label" for="name"> Department Name</label>
                                                        <div class="col-md-9">
                                                            <input type="text" required="required" name="name" class="form-control" >
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label class="col-md-3 col-form-label" for="Code"> Department Code</label>
                                                        <div class="col-md-9">
                                                            <input type="text" required="required" name="code" class="form-control" placeholder="eg. DOF">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label class="col-md-3 col-form-label" for="hod"> Head of Department (HOD)</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control" name="hod">
                                                                <option>Select</option>
                                                                <?php getStaffs(); ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label class="col-md-3 col-form-label" for="Description"> Description</label>
                                                        <div class="col-md-9">
                                                            <textarea data-toggle="maxlength" name="description" class="form-control" maxlength="225" rows="3"
                                                                      placeholder="This textarea has a limit of 225 chars."></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4" title="You must agree before submitting.">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="invalidCheck" required="required">
                                                            <label class="form-check-label form-label" for="invalidCheck">I Approve All records are Correct</label>
                                                        </div>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div> <!-- end row -->
                                        <ul class="list-inline wizard mb-0">
                                            <li class="next list-inline-item float-end">
                                                <button class="btn btn-sm btn-outline-primary" id="submitButton" type="submit" style="min-width: 100px;;">Save <i class="mdi mdi-content-save"></i></button>
                                            </li>
                                        </ul>
                                    </div> <!-- tab-content -->
                                </form>

                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
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


