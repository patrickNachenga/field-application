<?php
require_once ('Constant.php');

/**
 * @param String $level
 * @param array $data
 * @return void
 */
function saveError(string $level, array $data){
    $_SESSION['errors'][$level] = $data;
}
?>

<?php
//<div class="alert alert-success alert-dismissible fade show" role="alert">
//    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
//    <i class="dripicons-checkmark me-2"></i> This is a <strong>success</strong> alert - check it out!
//</div>


?>
