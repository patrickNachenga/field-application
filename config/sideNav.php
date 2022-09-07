<?php
require_once('Constant.php');
$user = $_SESSION['user'];


function path_link($path): string
{
    $url = explode('/',$_SERVER['SCRIPT_NAME']);
    if($path == end($url)):
        return "";
    else:
        return $path;
    endif;
}


?>

<!-- ========== Left Sidebar Start ========== -->
<div class="leftside-menu">

    <!-- LOGO -->
    <a href="#" class="logo text-center logo-light">
        <span class="logo-lg" style="font-weight: 600; font-family: algerian; font-size: x-large; color: whitesmoke">
            TPA- FIELD
        </span>
        <span class="logo-sm"style="font-weight: 600; font-family: algerian; font-size: x-large; color: whitesmoke">
            TPAF
        </span>
    </a>

    <!-- LOGO -->
    <a href="#" class="logo text-center logo-dark">
        <span class="logo-lg" style="font-weight: 600; font-family: algerian; font-size: x-large;">
            TPA- FIELD
        </span>
        <span class="logo-sm"style="font-weight: 600; font-family: algerian; font-size: x-large;">
            TPAF
        </span>
    </a>

    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title side-nav-item"><?= ucfirst($user['type']) ?> Navigation</li>

            <?php if($user['type'] == 'applicant'): ?>
                <li class="side-nav-item">
                    <a href="<?= path_link('index.php'); ?>" class="side-nav-link">
                        <i class="uil-home-alt"></i>
                        <span> Dashboards </span>
                    </a>
                </li>
            <?php endif; ?>

            <?php /** ===== FOR ADMIN THERE WILL BE DASHBOARD AND PROFILE PAGE ===== */ ?>
            <?php if($user['type'] == 'staff'): ?>
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                        <i class="uil-home-alt"></i>
                        <span class="badge bg-success float-end">2</span>
                        <span> Dashboards </span>
                    </a>
                    <div class="collapse" id="sidebarDashboards">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="<?= path_link('index.php'); ?>">Home</a>
                            </li>
                            <li>
                                <a href="<?= path_link('profile.php'); ?>">My profile</a>
                            </li>
                        </ul>
                    </div>
                </li>
            <?php endif; ?>

            <li class="side-nav-title side-nav-item">Activities</li>

            <?php if($user['type'] == 'applicant'): ?>
                <li class="side-nav-item">
                    <a href="<?= path_link('application.php'); ?>" class="side-nav-link">
                        <i class="uil-store"></i>
                        <span> My Applications </span>
                    </a>
                </li>
                <li class="side-nav-item">
                    <a href="<?= path_link('apply.php'); ?>" class="side-nav-link">
                        <i class="uil-envelope"></i>
                        <span> Apply new </span>
                    </a>
                </li>
                <li class="side-nav-item">
                    <a href="<?= path_link('departments.php'); ?>" class="side-nav-link">
                        <i class="uil-table"></i>
                        <span> Departments </span>
                    </a>
                </li>
            <?php endif; ?>

            <?php if($user['type'] == 'staff'): ?>
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarDepartment" aria-expanded="false" aria-controls="sidebarDepartment" class="side-nav-link">
                        <i class="uil-briefcase"></i>
                        <span> Department </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarDepartment">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="<?= path_link('add-department.php'); ?>">Add new</a>
                            </li>
                            <li>
                                <a href="<?= path_link('view-department.php'); ?>">view all</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="side-nav-item">
                    <a href="<?= path_link('application.php'); ?>" class="side-nav-link">
                        <i class="uil-layer-group"></i>
                        <span> Application </span>
                    </a>
                </li>


            <?php endif; ?>

        </ul>

        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
