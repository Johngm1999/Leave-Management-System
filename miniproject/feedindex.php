<?php
require('top.inc.php');
//$error = '';
$name='';
$email='';
$mobile='';
$department_id='';
$address='';
$birthday='';
$id='';
$image='';
if(isset($_GET['id'])){
	$id=mysqli_real_escape_string($con,$_GET['id']);
	if($_SESSION['ROLE']==1 && $_SESSION['USER_ID']!=$id){
		die('Access denied');
	}
	$res=mysqli_query($con,"select * from employee where id='$id'");
	$row=mysqli_fetch_assoc($res);
	$name=$row['name'];
	$email=$row['email'];
	$mobile=$row['mobile'];
	$department_id=$row['department_id'];
	$address=$row['address'];
	$birthday=$row['birthday'];
	$image=$row['image'];
	
}
$res=mysqli_query($con,"select * from employee where id=$id");  
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Dashboard Page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="assets/css/normalize.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="assets/css/flag-icon.min.css">
      <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
  <body>
  <div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Feedback</strong><small> Form</small></div>
                        <div class="card-body card-block">
	<form method="post" action="feedback.php">
		<div class="form-group">
									
									<?php 
									$i=1;
									while($row=mysqli_fetch_assoc($res)){?>
					
									<?php echo "<img id='myImg'  src='image/".$row['image']."'  style='width:10%;display:block;margin-left:auto;margin-right:auto' >"?>
									<?php 
									$i++;
									} ?>
									</div>
		name:<br>
		<input type="text" name="name" value="<?php echo $_SESSION['USER_NAME']?>" class="form-control" required readonly>
		<br>
		email:<br>
		<input type="email" name="email" value="<?php echo $_SESSION['EMAIL']?>" class="form-control" required readonly>
		<br>
		
									<label class=" form-control-label">Department</label>
									<select  required class="form-control" disabled>
										<option value="">Select Department</option>
										<?php
										$res=mysqli_query($con,"select * from department where id=$department_id order by department desc");
										while($row=mysqli_fetch_assoc($res)){
											if($department_id==$row['id']){
												echo "<option selected='selected' value=".$row['id']." >".$row['department']."</option>";
											}else{
												echo "<option value=".$row['id'].">".$row['department']."</option>";
											}
										}
										?>
									</select>
								
							
		
		<label class=" form-control-label">feedback</label>
									<select name="feedback" required class="form-control">
										<option value=""  name="feedback" >Give us feedback</option>
										<option value="excellent" name="feedback" id="excellent">Excellent</option>
										<option value="good" name="feedback" id="good">Good</option>
										
										<option value="average" name="feedback" id="average">Average</option>
										<option value="bad" name="feedback" id="bad">Bad</option>
										<option value="poor" name="feedback" id="poor">Poor</option>
				
					 </select></br>
		<button  type="submit" name="save" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
							   </button>
	</form>
	
	</div>
	</div>
	</div></div></div></div></div>
  </body>
</html>                
<?php
require('footer.inc.php');
?>