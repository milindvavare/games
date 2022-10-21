<?php 
include('db.php');

$full_name = $_POST['full_name'];
$school_name = $_POST['school_name'];
$grade = $_POST['grade'];
$p_email = $_POST['p_email'];
$p_mobile = $_POST['p_mobile'];


$sql_chk = "SELECT * FROM user_details WHERE p_mobile = '$p_mobile'";
$result_chk = mysqli_query($conn, $sql_chk);
if (mysqli_num_rows($result_chk) > 0) {
	
    $sql_update = "UPDATE user_details SET full_name = '$full_name', school_name = '$school_name', grade = '$grade', p_email = '$p_email', p_mobile = '$p_mobile' WHERE p_mobile = '$p_mobile'";
    
    if (mysqli_query($conn, $sql_update)) {
 	echo "1";
 }
 else{
 	echo "0";
 }


}
else{

$sql = "INSERT INTO `user_details`(`full_name`, `school_name`, `grade`, `p_email`, `p_mobile`, `status`)
 VALUES ('$full_name','$school_name','$grade','$p_email','$p_mobile','1')";
 if (mysqli_query($conn, $sql)) {
 	echo "1";
 }
 else{
 	echo "0";
 }
}

?>