<!-- Start Text Banner footer-->
<div class="container-fluid bg-danger txt-banner">
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
<!-- End Text Banner footer-->

<!-- Footer Start -->

<Footer class = "container-fluid bg-dark text-center p-2">
<small class="text-white">Copyright &copy; 2023 || Designed By Shamiur Rahman || <a href="" data-bs-toggle="modal" data-bs-target="#adminLoginModalCenter">Admin Login</a> </small>
</Footer>
<!-- Footer End -->


<!-- Start Registration model -->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="stuRegModalCenterLabel">Registration</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<!-- student Registration form start -->
<?php
include ('sudentRegistration.php');
?>
<!-- student Registration form End -->


      </div>
      <div class="modal-footer">
        <span id="successMsg"></span>        
        <button type="button" class="btn btn-primary" onclick="addStu()" id="signup">Signup</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
<!-- End Registration model -->

<!-- Start Login model -->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="stuLoginModalCenterLabel">Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- form code start -->
        <form id="stuLoginForm">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" class="form-control" id="stuLogemail" name="stuLogemail" />
                      <label class="form-label" for="stuLogemail">Your Email</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" class="form-control" id="stuLogpass" name="stuLogpass"/>
                      <label class="form-label" for="stuLogpass">Password</label>
                    </div>
                  </div>

</form>
        <!-- form code End -->

      </div>
      <div class="modal-footer">
        <small id="statusLogMsg"></small>
        <button type="button" class="btn btn-primary" id="stuLoginbtn" onclick="checkStuLogin()">Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancle</button>

      </div>
    </div>
  </div>
</div>
<!-- End Login model -->


<!-- Start Admin Login model -->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="adminLoginModalCenter" tabindex="-1" aria-labelledby="adminLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="adminLoginModalCenterLabel">Admin Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- form code start -->
        <form id="adminLoginForm">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" class="form-control" id="adminLogemail" name="adminLogemail" />
                      <label class="form-label" for="adminLogemail">Your Email</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" class="form-control" id="adminLogpass" name="adminLogpass"/>
                      <label class="form-label" for="adminLogpass">Password</label>
                    </div>
                  </div>

</form>
        <!-- form code End -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="adminLoginbtn" onclick="checkAdminLogin()">Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancle</button>

      </div>
    </div>
  </div>
</div>
<!-- End Admin Login model -->


<!-- Jquery and Bootstrap Javascript -->
<script src="js/jquery.min.js"></script>
<!-- <script src="js/popper.min.js"></script> -->
<script src="js/bootstrap.min.js"></script>
<!-- Font Awesome Js -->
<script src="js/all.min.js"></script>

<!-- AJAX call Js -->
<script src="js/ajaxrequest.js"></script>
<script src="js/adminajaxrequest.js"></script>



</body>
</html>
