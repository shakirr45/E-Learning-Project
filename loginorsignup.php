<?php
include('./mainInclude/header.php');
include('./dbConnection.php');

?>

<div class="container-fluid bg-dark">
    <div class="row">
        <img src="./image/book.jpg" alt="course" style="height: 300px; width: 100%; object-fit: cover; box-shadow: 10px;">
    </div>
</div>

<div class="container jumbotron mb-5">
    <div class="row">
        <div class="col-md-4">
            <h5 class="mb-3">If Already Registard !! login</h5>
            <form role="form" id="stuLoginForm">
                <div class="form-group">
                    <i class="fas fa-envelope"></i><label for="stuLogemail" class="pl-2 font-weight-bold">Email</label><small id="statusLogMsg1"></small><input type="email" class="form-control" placeholder="Email" name="stuLogemail" id="stuLogemail">
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i><label for="stuLogpass" class="pl-2 font-weight-bold">Password</label><input type="password" class="form-control" placeholder="Password" name="stuLogpass" id="stuLogpass">
                </div>
                <button class="btn btn-primary" type="button" id="stuLoginBtn" onclick="checkStuLogin()">Login</button>
            </form><br>
            <small id="statusLogMsg"></small>
        </div>
        <div class="col-md-6 offset-md-1">
            <h5 class="mb-3">NEw User !! Sign Up</h5>
            <form role="form" id="stuRegForm">
                <div class="form-group">
                    <i class="fas fa-user"></i><label for="stuname" class="pl-2 font-weight-bold">Name</label><small id="statusLogMsg1"></small><input type="text" class="form-control" placeholder="name" name="stuname" id="stuname">
                </div>
                <div class="form-group">
                    <i class="fas fa-envelope"></i><label for="stuemail" class="pl-2 font-weight-bold">Email</label><small id="statusLogMsg1"></small><input type="email" class="form-control" placeholder="Email" name="stuemail" id="stuemail">
                    <small class="form-text">Naver share email</small>
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i><label for="stupass" class="pl-2 font-weight-bold">New Password</label><input type="password" class="form-control" placeholder="Password" name="stupass" id="stupass">
                </div>
                <button class="btn btn-primary" type="button" id="stuLoginBtn" onclick="addStu()">Sign Up</button>
            </form><br>
            <small id="successMsg"></small>
        </div>
    </div>
</div>




<?php
include('./contact.php');

?>



<?php
include('./mainInclude/footer.php')
?>