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

$adminEmail = $_SESSION['adminLogemail'];
if(isset($_REQUEST['adminPassUpdateBtn'])){
    if(($_REQUEST['adminPass'] == "")){
        $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fields</div>';
    }else{
        $sql = "SELECT * FROM admin WHERE admin_email='$adminEmail'";
        $result = $conn->query($sql);
        if($result->num_rows == 1){
            $adminPass = $_REQUEST['adminPass'];
            $sql = "UPDATE admin SET admin_pass= '$adminPass' WHERE admin_email = '$adminEmail'";
            if($conn->query($sql) == TRUE){
                $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Update Successfully</div>';
            }else{
        $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to update</div>';

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
            <input type="email" class="form-control" id="inputEmail" value="<?php echo $adminEmail?>" readonly/>    
                </div>

                <div class="form-group">
                    <label for="inputNewpassword">New Password</label>
            <input type="text" class="form-control" id="inputNewpassword" placeholder="New Password" name="adminPass"/>    
                </div>
                <button type="submit" class="btn btn-danger mt-4 mr-4" name="adminPassUpdateBtn">Update</button>
                <button class="btn btn-secondary mt-4" type= "reset">Reset</button>
                <?php if(isset($passmsg)) {echo $passmsg;}?>
            </form>
        </div>
    </div>
</div>