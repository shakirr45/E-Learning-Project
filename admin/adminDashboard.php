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
?>



<div class="col-sm-9 mt-5">
    <div class="row mx-5 text-center">
<?php
$sql = "SELECT * FROM course";
$result = $conn->query($sql);
$total_course = $result->num_rows;

$sql = "SELECT * FROM student";
$result = $conn->query($sql);
$total_student = $result->num_rows;
?>
        <div class="col-sm-4 mt-5">
            <div class="card text-white bg-danger mb-3" style="max-width:18rem;">
            <div class="card-header">Coursess</div>
            <div class="card-body">
                <h4 class="card-title">
                    <?php echo $total_course;?>
                </h4>
                <a href="" class="btn text-white">View</a>
            </div>
        </div>
    </div>

        <div class="col-sm-4 mt-5">
            <div class="card text-white bg-success mb-3" style="max-width:18rem;">
            <div class="card-header">Coursess</div>
            <div class="card-body">
                <h4 class="card-title">
                <?php echo $total_student;?>

                </h4>
                <a href="" class="btn text-white">Students</a>
            </div>
            </div>
        </div>

        <div class="col-sm-4 mt-5">
            <div class="card text-white bg-secondary mb-3" style="max-width:18rem;">
            <div class="card-header">Sold</div>
            <div class="card-body">
                <h4 class="card-title">
                    3
                </h4>
                <a href="" class="btn text-white">View</a>
            </div>
            </div>
        </div>
    </div>

    <div class="mx-5 mt-5 text-center">   
    <!-- Table -->

    <p class="bg-dark text-white p-2">Courses Ordered</p>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Order ID</th>
                <th scope="col">Course ID</th>
                <th scope="col">Student Email</th>
                <th scope="col">Order Data</th>
                <th scope="col">Amount</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <th scope="row">22</th>
                <td>100</td>
                <td>Sonam@gmail.com</td>
                <td>20/10/3000</td>
                <td>2000</td>
                <td><button type="submit" class="btn btn-secondary" name="delete" value="delete">delete<i class="far fa-trash-alt"></i></button></td>

            </tr>
        </tbody>
    </table>
</div>
</div>
<!-- div row close from header -->
</div> 
<!-- div container-fluid close from header -->
</div>

<?php
include('./admininclude/footer.php');
?>


