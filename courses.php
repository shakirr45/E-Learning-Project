<!--Start including header-->

<?php
include('./mainInclude/header.php');
include('./dbConnection.php');

?>

<!--End including header-->

<!--Start Course Banner-->

<div class="container-fluid">
    <div class="row">
        <img src="./image/book.jpg" alt="bk-img" style="height:500px; width:100%; object-fit:cover; box-shadow:10px;">
    </div>
</div>
<!--End Course Banner-->

<!-- Start Most Populer Courses-->
<div class="container mt-5">
    <h1 class = "text-center">All Courses</h1>
<div class="row row-cols-1 row-cols-md-3 g-4">
<?php 
$sql = "SELECT * FROM course";
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



<!-- Most Populer Courses End-->






<!-- Start including footer -->
<?php
include('./mainInclude/footer.php')
?>
<!-- End including footer -->
