<!--Start including header-->
<?php
include('./mainInclude/header.php');
?>
<!--End including header-->
<!--Start Course Banner-->

<div class="container-fluid">
    <div class="row">
        <img src="./image/book.jpg" alt="bk-img" style="height:500px; width:100%; object-fit:cover; box-shadow:10px;">
    </div>
</div>
<!--End Course Banner-->

<!--id search-->
<div class="container">
<h2 class="text-center my-4">Payment Status</h2>
<form action="" method="post">
<div class="input-group">
<label class="offset-sm-3 col-form-label">Order ID:</label>

  <input type="search" class="form-control rounded " placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
  <button type="button" class="btn btn-primary">search</button>
</div>

</form>
</div>

<!--id search end-->

<h1>Payment Page</h1>

<!-- Start Contact Us-->

<?php
include('./contact.php');
?>

<!-- End Contact Us -->


<!-- Start including footer -->
<?php
include('./mainInclude/footer.php')
?>
<!-- End including footer -->