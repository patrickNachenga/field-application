<?php
require_once('Constant.php');

$user = $_SESSION['user'];
/**
 * $userData
 * declared before calling this file. its not error
 */
?>
 <div class="navbar-custom">
                <ul class="list-unstyled topbar-menu float-end mb-0">
                    <li class="notification-list">
                        <a class="nav-link end-bar-toggle" href="javascript: void(0);">
                            <i class="dripicons-gear noti-icon"></i>
                        </a>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                           aria-expanded="false">
                            <span class="account-user-avatar">
                                <img src="<?= BASE_URL.'assets/images/users/'.$userData['image'] ?>" alt="" class="rounded-circle">
                            </span>
                            <span>
                                <span class="account-user-name"><?= ucfirst($userData['f_name']." ".$userData['s_name']) ?></span>
<span class="account-position">Applicant</span>
</span>
</a>
<div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
    <!-- item-->
    <div class=" dropdown-header noti-title">
        <h6 class="text-overflow m-0">Welcome <?= ucfirst($userData['f_name']) ?></h6>
    </div>

    <!-- item-->
    <a href="<?= ($user['type'] == 'staff') ? 'profile.php' : 'index.php'; ?>" class="dropdown-item notify-item">
        <i class="mdi mdi-account-circle me-1"></i>
        <span>My Profile</span>
    </a>

    <!-- item-->
    <a href="javascript:void(0);" class="dropdown-item notify-item end-bar-toggle">
        <i class="mdi mdi-account-edit me-1"></i>
        <span>Settings</span>
    </a>
    <!-- item-->
    <a href="javascript:void(0);" onclick="window.location.replace('<?= BASE_URL.'sign-out.php' ?>')" class="dropdown-item notify-item">
        <i class="mdi mdi-logout me-1"></i>
        <span>Logout</span>
    </a>
</div>
</li>

</ul>
<button class="button-menu-mobile open-left">
    <i class="mdi mdi-menu"></i>
</button>
</div>

