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
                                    <li class="breadcrumb-item active"><a href="javascript: void(0);">Profile</a></li>
                                </ol>
                            </div>
                            <h4 class="page-title">Profile</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->


                <div class="row">
                    <div class="col-sm-12">
                        <!-- Profile -->
                        <div class="card bg-primary">
                            <div class="card-body profile-user-box">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="avatar-lg">
                                                    <img src="<?= BASE_URL.'assets/images/users/'.$userData['image'] ?>" alt="" class="rounded-circle img-thumbnail">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div>
                                                    <h4 class="mt-1 mb-1 text-white"><?= ucfirst($userData['f_name']." ".$userData['m_name']." ".$userData['s_name']) ?></h4>
                                                    <p class="font-13 text-white-50"> Field Applicant</p>

                                                    <ul class="mb-0 list-inline text-light">
                                                        <li class="list-inline-item me-3">
                                                            <h5 class="mb-1">
                                                                55 <i class="dripicons-checklist" style="font-size:36px; color: rgba(11,11,11,0.12)"></i>
                                                            </h5>
                                                            <p class="mb-0 font-13 text-white-50"">Total Request</p>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <h5 class="mb-1">
                                                                14 <i class="dripicons-graph-line" style="font-size:36px; color: rgba(11,11,11,0.12)"></i>
                                                            </h5>
                                                            <p class="mb-0 font-13 text-white-50">Pending Request</p>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <h5 class="mb-1">
                                                                14 <i class="mdi mdi-trending-up" style="font-size:36px; color: rgba(1,27,2,0.12)"></i>
                                                            </h5>
                                                            <p class="mb-0 font-13 text-white-50">Accepted Request</p>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <h5 class="mb-1">
                                                                4 <i class="mdi mdi-trending-down" style="font-size:36px; color: rgba(244,6,6,0.12)"></i>
                                                            </h5>
                                                            <p class="mb-0 font-13 text-white-50">Failed Request</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end col-->

                                    <div class="col-sm-4">
                                        <div class="text-center mt-sm-0 mt-3 text-sm-end">
                                            <button type="button" class="btn btn-outline-light btn-sm">
                                                <i class="mdi mdi-account-edit me-1"></i> Edit Profile
                                            </button>
                                        </div>
                                    </div> <!-- end col-->
                                </div> <!-- end row -->

                            </div> <!-- end card-body/ profile-user-box-->
                        </div><!--end profile/ card -->
                    </div> <!-- end col-->
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-xl-4">
                        <!-- Personal-Information -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mt-0 mb-3">Applicant Information</h4>
                                <p class="text-muted font-13" style="min-height: 70px">
                                    <?= $userData['bio'] ?? "Write something that make easy for you to win in Field position"; ?>
                                </p>

                                <hr/>

                                <div class="text-start">
                                    <p class="text-muted"><strong>Full Name :</strong> <span class="ms-2"><?= ucfirst($userData['f_name']." ".$userData['m_name']." ".$userData['s_name']) ?></span></p>

                                    <p class="text-muted"><strong>Gender :</strong> <span class="ms-2"><?= ucfirst($userData['gender']) ?></span></p>

                                    <p class="text-muted"><strong>Mobile :</strong><span class="ms-2"><?= $userData['contact'] ?></span></p>

                                    <p class="text-muted"><strong>Email :</strong> <span class="ms-2"><?= $userData['email'] ?></span></p>

                                    <p class="text-muted"><strong>Languages :</strong>
                                        <span class="ms-2">
                                            <?php if(!empty($userData['language'])):
                                                    $languages = json_decode($userData['language'],true);
                                                    foreach ($languages as $lang){ echo '<span class="badge bg-primary p-1 m-1">'.$lang.'</span>'; }
                                                endif;
                                            ?>
                                        </span>
                                    </p>
                                    <button type="button" class="btn btn-outline-primary btn-sm">
                                        <i class="mdi mdi-account-edit me-1"></i> Edit Profile
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Personal-Information -->

                        <!-- Toll free number box-->
                        <div class="card text-white bg-info overflow-hidden">
                            <div class="card-body">
                                <div class="toll-free-box text-center">
                                    Applicant Status :<h4> Active</h4>
                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                        <!-- End Toll free number box-->

                    </div> <!-- end col-->

                    <div class="col-xl-8">

                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-3">Application Overview</h4>

                                <div class="table-responsive">
                                    <table class="table table-hover table-centered mb-0">
                                        <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Stock</th>
                                            <th>Amount</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>ASOS Ridley High Waist</td>
                                            <td>$79.49</td>
                                            <td><span class="badge bg-primary">82 Pcs</span></td>
                                            <td>$6,518.18</td>
                                        </tr>
                                        <tr>
                                            <td>Marco Lightweight Shirt</td>
                                            <td>$128.50</td>
                                            <td><span class="badge bg-primary">37 Pcs</span></td>
                                            <td>$4,754.50</td>
                                        </tr>
                                        <tr>
                                            <td>Half Sleeve Shirt</td>
                                            <td>$39.99</td>
                                            <td><span class="badge bg-primary">64 Pcs</span></td>
                                            <td>$2,559.36</td>
                                        </tr>
                                        <tr>
                                            <td>Lightweight Jacket</td>
                                            <td>$20.00</td>
                                            <td><span class="badge bg-primary">184 Pcs</span></td>
                                            <td>$3,680.00</td>
                                        </tr>
                                        <tr>
                                            <td>Marco Shoes</td>
                                            <td>$28.49</td>
                                            <td><span class="badge bg-primary">69 Pcs</span></td>
                                            <td>$1,965.81</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- end table responsive-->
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-outline-primary btn-sm">
                                        <i class="mdi mdi-send me-1"></i> goto applications
                                    </button>
                                </div>

                            </div> <!-- end col-->
                        </div> <!-- end row-->

                    </div>
                    <!-- end col -->

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


