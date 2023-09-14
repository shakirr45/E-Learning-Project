<?php
// session start
if(!isset($_SESSION)){
    session_start();
}
include('../dbConnection.php');


//Admin login varification
if(!isset($_SESSION['is_admin_login'])){

if(isset($_POST['checkLogemail']) && isset($_POST['adminLogemail']) && isset($_POST['adminLogpass'])){
$checkLogemail = $_POST['adminLogemail'];
$adminLogpass = $_POST['adminLogpass']; 


$sql = "SELECT admin_email, admin_pass FROM admin WHERE admin_email= '".$checkLogemail."' AND admin_pass='".$adminLogpass."'";
$result = $conn->query($sql);
$row = $result->num_rows;
if($row === 1){
    $_SESSION['is_admin_login'] = true;
    $_SESSION['adminLogemail'] = $checkLogemail;
    echo json_encode($row);

}else if($row === 0){
    echo json_encode($row);

}
}
}
?>