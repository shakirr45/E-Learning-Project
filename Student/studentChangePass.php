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

if(isset($_REQUEST['stuPassUpdateBtn'])){
    if(($_REQUEST['stunewPass']) == ""){
        $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fields</div>';

    }else{
        $sql = "SELECT * FROM student WHERE stu_email = '$stuEmail'";
        $result = $conn->query($sql);
        if($result-> num_rows == 1){
            $stupass = $_REQUEST['stunewPass'];
            $sql = "UPDATE student SET stu_password = '$stupass' WHERE stu_email = '$stuEmail'";
            if($conn->query($sql) == TRUE){
                $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Update Successfully</div>';

            }else{
                $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">not</div>';

            }
        }
    }

}




?>


<div class="col-sm-9 mt-5">
    <div class="row">
        <div class="col-sm-6">
            <form class="mt-5 mx-5">
                <div class="form-group">
                    <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" value="<?php echo $stuEmail?>" readonly/>    
                </div>

                <div class="form-group">
                    <label for="inputnewpass">New Password</label>
            <input type="text" class="form-control" id="inputnewpass" placeholder="New Password" name="stunewPass"/>    
                </div>
                <button type="submit" class="btn btn-danger mt-4 mr-4" name="stuPassUpdateBtn">Update</button>
                <button class="btn btn-secondary mt-4" type= "reset">Reset</button>
                <?php if(isset($passmsg)) {echo $passmsg;}?>
            </form>
        </div>
    </div>
</div>