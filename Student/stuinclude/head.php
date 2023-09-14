<?php
include_once('dbConnection.php');
if(!isset ($_SESSION)){
    session_start();
}

if(isset($_SESSION['is_login'])){
    $stuLogEmail = $_SESSION['stuLogEmail'];
}
// else{
//     echo "<script>location.href='../fst.php';</script>";
// }

if(isset($stuLogEmail)){
    $sql = "SELECT stu_img FROM student WHERE stu_email = '$stuLogEmail'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $stu_img = $row['stu_img'];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome css -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <!-- Custom Css-->
    <link rel="stylesheet" href="../css/stustyle.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

</head>
<body>
    <!-- Top Navbar -->
    <nav class="navbar navbar-dark fixed-top flex-md-nowrap p-0 shadow" style="background-color: #225470;">
    <a href="studentProfile.php" class="navbar-brand">E-Learning</a>
</nav>

<!-- side bar -->
<div class="container-fluid mb-5" style="margin-top:40px">
<div class="row">
    <nav class="col-sm-2 bg-light sidebar py-5 d-print-none">
        <div class="sidebar-sticky">
            <ul class="nav flex-column">
                <li class="nav-item mb-3">
                    <img src="<?php echo $stu_img?>" alt="stuimg" class="img-thumbnail rounded-circle">
                </li>
                <!-- lock -->

                <!-- lock -->

                <li class="nav-item">
                    <a href="mycourse.php" class="nan-link">
                        <i class="fab fa-accessible-icon"></i>
                        My Course
                    </a>
                </li>
                <li class="nav-item">
                    <a href="stufeedback.php" class="nan-link">
                        <i class="fab fa-accessible-icon"></i>
                        Feedback
                    </a>
                </li>
                <li class="nav-item">
                    <a href="studentChangePass.php" class="nan-link">
                        <i class="fab fa-key"></i>
                        Change Password
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../logout.php" class="nan-link">
                        <i class="fab fa-sign-out-alt"></i>
                        Logout
                    </a>
                </li>
                
            </ul>
        </div>
    </nav>
</div>
</div>

<!-- Jquery and Bootstrap Javascript -->
<script src="js/jquery.min.js"></script>
<!-- <script src="js/popper.min.js"></script> -->
<script src="js/bootstrap.min.js"></script>
<!-- Font Awesome Js -->
<script src="js/all.min.js"></script>

<!-- AJAX call Js -->
<script src="js/ajaxrequest.js"></script>
<script src="js/adminajaxrequest.js"></script>



</body>
</html>
