<?php
if(!isset($_SESSION)){
    session_start();
}
include('../dbConnection.php');
include('./stuinclude/head.php');

if(isset($_SESSION['is_login'])){
$stuEmail = $_SESSION['stuLogEmail'];
}else{
    echo "<script>location.href='../fst.php';</script>";
}

$sql = "SELECT * FROM student WHERE stu_email = '$stuEmail'";
$result = $conn->query($sql);
if($result->num_rows == 1){
    $row = $result->fetch_assoc();
    $stuId = $row["stu_id"];
}

if(isset($_REQUEST['submitFeedbackBtn'])){
    if(($_REQUEST['f_content']) == ""){
        $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All fields</div>';
    }else{
        $fcontent = $_REQUEST["f_content"];
        $sql = "INSERT INTO feedback (f_content,stu_id) VALUES ('$fcontent','$stuId')";
        if($conn->query($sql) == TRUE){
        $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Submitted successfully</div>';

        }
    }
}

?>

<div class="col-sm-6 mt-5">
    <form class="mx-5" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="stuId">Student ID</label>
            <input type="text" class="form-control" id="stuId" name="stuId" value="<?php if(isset($stuId)){echo $stuId;}?>" readonly>
        </div>
        <div class="form-group">
            <label for="f_content">Write Feedback</label>
            <textarea class="form-control" id="f_content" name="f_content" rows="2"></textarea>
        </div>

        <button type="submit" class="btn btn-primary" name="submitFeedbackBtn">Submit</button>
        <?php if(isset($passmsg)) {echo $passmsg;}?>
    </form>
</div>


