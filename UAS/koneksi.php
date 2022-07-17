
<?php
$conn = new mysqli('localhost','sql_achmadaff_un','GNDYS6z2WPs3tc5T','sql_achmadaff_un');
if ($conn->connect_error) {
    die('Error : ('. $conn->connect_errno .') '. $conn->connect_error);
}
?>