<!-- Start including Header -->
<?php
include('./dbConnection.php');

include('./mainInclude/header.php');
?>
<!-- End including Header -->
<!--Start video Background-->
<div class="container-fluid remove-vid-marg">
<div class = "vid-parent">
    <video playsinline autoplay muted loop>
        <source src = "video/banvid.mp4">
    </video>
    <div class = "vid-overplay"></div>
</div>
<div class="vid-content">
    <h1 class = "my-content">Welcome to iSchool</h1>
    <small class ="my-content">Learn and Implement</small><br>

<?php
    if(!isset($_SESSION['is_login'])){
      echo '
      <a href="" class = "btn btn-danger" data-bs-toggle="modal" data-bs-target="#stuRegModalCenter">Get Started</a>
      ';
    }else{
      echo '
      <a href="Student/studentProfile.php" class = "btn btn-primary mt-3">My Profile</a>';
    }
?>

<!-- <button type="button" class="btn btn-primary" > -->
</button>

</div>
</div>
<!--End video Background-->

<!-- Start Text Banner-->
<div class="container bg-danger txt-banner">
    <div class="row bottom-banner">
        <div class="col-sm">
            <h5><i class = "fas fa-book-open mr-3"></i> 100+ Online Courses</h5>
        </div>
        <div class="col-sm">
            <h5><i class = "fas fa-users mr-3"></i> Expert Instructors</h5>
        </div>
        <div class="col-sm">
            <h5><i class = "fas fa-keyboard mr-3"></i> Lifetime Access</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fa-solid fa-indian-rupee-sign mr-3"></i> Money Back Guarantee*</h5>
        </div>
    </div>
</div>
<!-- End Text Banner-->

<!-- Start Most Populer Courses-->
<div class="container mt-5">
    <h1 class = "text-center"> Courses</h1>
<div class="row row-cols-1 row-cols-md-3 g-4">
<?php 
$sql = "SELECT * FROM course LIMIT 3";
$result = $conn->query($sql);
if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    $course_id = $row['course_id'];
    echo '
     <div class="col">
    <div class="card">
      <img src="'. str_replace('..', '.', $row['course_img']).'" class="card-img-top"
        alt="Hollywood Sign on The Hill"/>
      <div class="card-body">
        <h5 class="card-title">'.$row['course_name'].'</h5>
        <p class="card-text">'.$row['course_desc'].'</p>
        <span>Original Price: '.$row['course_original_price'].'</span>

        <span>Price: '.$row['course_price'].'</span>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a class="btn btn-primary text-white font-weight-bolder float-right" href="coursedetails.php?course_id='.$course_id.'" >Enroll</a>

   </div>
      </div>
    </div>
  </div>';
  }
}
?>
</div>
<!-- Start Most Populer 3rd Course -->
<div class="container-fluid mt-5">
<h1 class="text-center">Most Popular Courses</h1>

<div class="container mt-5">

<div class="row row-cols-1 row-cols-md-3 g-4">
<?php 
$sql = "SELECT * FROM course LIMIT 3, 3";
$result = $conn->query($sql);
if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    $course_id = $row['course_id'];
    echo '
     <div class="col">
    <div class="card">
      <img src="'. str_replace('..', '.', $row['course_img']).'" class="card-img-top"
        alt="Hollywood Sign on The Hill"/>
      <div class="card-body">
        <h5 class="card-title">'.$row['course_name'].'</h5>
        <p class="card-text">'.$row['course_desc'].'</p>
        <span>Original Price: '.$row['course_original_price'].'</span>

        <span>Price: '.$row['course_price'].'</span>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a class="btn btn-primary text-white font-weight-bolder float-right" href="coursedetails.php?course_id='.$course_id.'" >Enroll</a>

   </div>
      </div>
    </div>
  </div>';
  }
}
?>

</div>

<a class="btn btn-danger text-center text-white font-weight-bolder float-right" href="courses.php" >View All Course</a>



<!-- Most Populer Courses End-->



<!-- Start Contact Us-->
<?php
include('./contact.php');

?>
<!-- End Contact Us -->

 

<!-- Start Carousel -->
<!-- <div class="testimonials"> -->
        <div class="container-fluid testimonials">
            <h1 class="text-center">Feedback</h1>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, repellat?</p>

            <div class="row">
                <div class="col-md-4 carousel-mn text-center">
<?php
$sql = "SELECT s.stu_name, s.stu_occ, s.stu_img, f.f_content FROM student AS s JOIN feedback AS f ON s.stu_id = f.stu_id";
$result = $conn->query($sql);
if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    $s_img = $row["stu_img"];
    $n_img = str_replace('..', '.', $s_img); 

?>
                   
                   <div class="profile-caro">
                        <img src="<?php echo $n_img; ?>" alt="" srcset="" class="user">
                        <p><?php echo $row  ['f_content']; ?></p>
                        <h4><?php echo $row  ['stu_name']; ?></h4>
                        <small><?php echo  $row ['stu_occ']; ?></small>

<?php
         }
}

?>
                </div>
                </div>


                <!-- <h3>Ashar Kr <span class="carousel-span">Co-founder at XzY</span></h3> -->

            </div>
        </div>
</div>
    
<!-- Carousel End-->

<!-- Start including footer -->
<?php
include('./mainInclude/footer.php')
?>
<!-- End including footer -->
