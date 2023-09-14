<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome css -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <!-- Custom Css-->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">



    <title>iSchool</title>
</head>
<body>
<!--Start Navigation-->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top pl-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="fst.php">iSchool</a>
    <span class = "navbar-text">Learn and Implement</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav custom-nav">
      <li class="nav-item custom-nav-item"><a href="fst.php" class = "nav-link">Home</a></li>
      <li class="nav-item custom-nav-item"><a href="courses.php" class = "nav-link">Courses</a></li>
      <li class="nav-item custom-nav-item"><a href="paymentstatus.php" class = "nav-link">Payment Status</a></li>

      <?php
      session_start();
      if(isset($_SESSION['is_login'])){
        echo '
        <li class="nav-item custom-nav-item"><a href="Student/studentProfile.php" class = "nav-link">My Profile</a></li>
        <li class="nav-item custom-nav-item"><a href="logout.php" class = "nav-link">Logout</a></li>
        ';
      }else{
        echo '
        <li class="nav-item custom-nav-item"><a href="" class = "nav-link" data-bs-toggle="modal" data-bs-target="#stuLoginModalCenter">Login</a></li>
      <li class="nav-item custom-nav-item"><a href="" class = "nav-link" data-bs-toggle="modal" data-bs-target="#stuRegModalCenter">Signup</a></li>
        ';
      }
      ?>


      
      <li class="nav-item custom-nav-item"><a href="" class = "nav-link">Feedback</a></li>
      <li class="nav-item custom-nav-item"><a href="" class = "nav-link">Contact</a></li>
       </ul>
    </div>
  </div>
</nav>
<!--Stop Navigation-->