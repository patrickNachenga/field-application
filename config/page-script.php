<?php
require_once('Constant.php');
?>

<!-- bundle -->
<script src="<?= BASE_URL ?>assets/js/vendor.min.js"></script>
<script src="<?= BASE_URL ?>assets/js/app.min.js"></script>

<!-- third party js -->
<script src="<?= BASE_URL ?>assets/js/vendor/Chart.bundle.min.js"></script>
<!-- third party js ends -->

<!-- demo app -->
<script src="<?= BASE_URL ?>assets/js/pages/demo.profile.js"></script>

<script src="<?= BASE_URL ?>assets/js/inner.js"></script>

<?php if( isset($_SESSION['user']['type']) AND $_SESSION['user']['type'] == "staff"): ?>
    <script src="<?= BASE_URL ?>assets/js/staff.js"></script>
<?php else: ?>
    <script src="<?= BASE_URL ?>assets/js/applicant.js"></script>
<?php endif;?>

