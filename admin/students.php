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
    <!--Table-->
    <p class="bg-dark text-white p-2">List of Students</p>
    
    <?php
    $sql = "SELECT * FROM student ";
    $result = $conn->query($sql);
    if($result->num_rows > 0){

    ?>
<table class="table">
        <thead>
            <tr>
                <th scope="col">Student ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
            while($row = $result->fetch_assoc()){

    echo '<tr>';
    echo '<th row="row">'.$row['stu_id'].'</th>';
    echo '<td>'.$row['stu_name'].'</td>';
    echo '<td>'.$row['stu_email'].'</td>';
    echo '<td>';
    echo'
    <form action="editStudent.php" method="POST" class="d-inline">
    <input type="hidden" name="id" value='.$row['stu_id'].'>

    <button 
    type="submit" 
    class="btn btn-info mr-3" 
    name="view" 
    value="view"
    >edit
        <i class="fa fa-pan"></i>
    </button>
    </form>

    
    <form action="" method="POST" class="d-inline">
    <input type="hidden" name="id" value='.$row['stu_id'].'>
    <button type="submit" class="btn btn-secondary mr-3" name="delete" value="Delete">Delete
        <i class="fa fa-trash-alt"></i>
    </button>
    </form>
    </td>
    </tr>';

}
?>

</tbody>
    </table>

<?php
}else{
    echo "No data";
}
//  Delete code --------------
if(isset($_REQUEST['delete'])){
    $sql= "DELETE FROM student WHERE stu_id = {$_REQUEST['id']}";
    if($conn->query($sql) == TRUE){
        echo '<meta http-equiv="refresh" content="0;URL=?deleted" />';

    }else{
        echo "Unable to delete data";
    }
}


?>



<!-- add item -->
<div>
<a href="./addnewstudent.php" class="btn btn-danger box">
<i class="fa fa-trash-alt">Add</i>

</a>
</div>
</div>






<?php
include('./admininclude/footer.php');
?>

