<?php
include('./dbConnection.php');
session_start();
if(!isset($_SESSION['stuLogEmail'])){
echo "<script> location.href ='loginorsignup.php'</script>";
}else{
    header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
    $stuEmail = $_SESSION['stuLogEmail'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<meta name="GENERATOR" content="Evrsoft First Page">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome css -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <!-- Custom Css-->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <title>Checkout</title>
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-sm-6 offset-sm-3 jumbotron">
        <h3 class="mb-5">Welcome to E-learning payment page</h3>
<form method="post" action="./PaytmKit/pgRedirect.php">
		<table border="1">
			<tbody>
				<tr>
					<th>S.No</th>
					<th>Label</th>
					<th>Value</th>
				</tr>
				<tr>
					<td>1</td>
					<td><label>ORDER_ID::*</label></td>
					<td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>">
					</td>
				</tr>
                <div class="form-group row">   
            <label for="stu_email">Email</label>                        
            <input type="text" class="form-control" id="stu_email" name="stu_email" value="<?php if(isset($stuEmail)){echo $stuEmail;}?>"/>
        </div>
        <div class="form-group row">   
            <label for="stu_email">Amout</label>                        
            <input type="text" class="form-control" id="stu_email" name="stu_email" value="<?php if(isset($_POST['id'])){echo $_POST['id'];} ?>"/>
        </div>
				<tr>
					<td>3</td>
					<td><label>INDUSTRY_TYPE_ID ::*</label></td>
					<td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
				</tr>
				<tr>
					<td>4</td>
					<td><label>Channel ::*</label></td>
					<td><input id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
					</td>
				</tr>
				<tr>
					<td>5</td>
					<td><label>txnAmount*</label></td>
					<td><input title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="1">
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input value="Check Out" type="submit"	onclick=""></td>
                    <a href="./courses.php">cancle</a>
				</tr>
			</tbody>
		</table>
		* - Mandatory Fields
	</form>  

        </div>

    </div>
</div>

  
</body>
</html>

<?php
}
?>


