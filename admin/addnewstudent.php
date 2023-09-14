<?php
if(!isset($_SESSION)){
    session_start();
}
include('./admininclude/header.php');
include('../dbConnection.php');

if(isset($_SESSION['is_admin_login'])){

    $adminEmail = $_SESSION['adminLogemail'];
}else{
    echo "<script>location.href='../fst.php';</script>";
}

if(isset($_REQUEST['NewStuSubmitBtn'])){
    //Checking or empty fields
    if(($_REQUEST['stu_name'] == "") || ($_REQUEST['stu_email'] == "") || ($_REQUEST['stu_password'] == "") || ($_REQUEST['stu_occ'] == "")){
        // echo "Fill All Field";
        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Field</div>';
    }else{

        $stu_name = $_REQUEST['stu_name'];
        $stu_email = $_REQUEST['stu_email'];
        $stu_password = $_REQUEST['stu_password'];
        $stu_occ = $_REQUEST['stu_occ'];
    

        $sql = "INSERT INTO student (stu_name,stu_email,stu_password,stu_occ) VALUES ('$stu_name','$stu_email','$stu_password','$stu_occ')";
        if($conn->query($sql) == TRUE){
            $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Student added successfully</div>';
        }else{
                    $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">unable to add Student</div>';
        }



    }
}

?>


<div class="col-sm-6 mt-5  mx-3 jumbotron">
<div class="container-fluid">
    <div class="row">
    <h3 class="text-center">Add New Student</h3>
   
 <form action="" method="post" enctype="multipart/form-data">
        
        <div class="form-group">   
            <label for="stu_name">Name</label>            
            <input type="text" class="form-control" id="stu_name" name="stu_name"/>
        </div>

        <div class="form-group">   
            <label for="stu_email">Email</label>                        
            <input type="text" class="form-control" id="stu_email" name="stu_email"/>
        </div>

        <div class="form-group">   
            <label for="stu_password">Password</label>            
            <input type="text" class="form-control" id="stu_password" name="stu_password"/>
        </div>

        <div class="form-group">   
            <label for="stu_occ">Occupation </label>            
            <input type="text" class="form-control" id="stu_occ" name="stu_occ"/>

        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="NewStuSubmitBtn" name="NewStuSubmitBtn">Submit</button>
            <a href="students.php" class="btn btn-secondary">Close</a>
        </div>
        <?php
        if(isset($msg)){
            echo $msg;
        }

        ?>

    </form>
</div>


</div></div>

<?php
include('./admininclude/footer.php');
?>