<?php
require('top.inc.php');

error_reporting(0);
//$conn = mysqli_connect("localhost","root","","leave_management_system2");

$result = mysqli_query($con,"SELECT * FROM faculty_leave  where id='$id' ");

?>
<!DOCTYPE html>
<html>
<head>
<title> dashboard</title>
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
</head>
<body>
<div class="content pb-0">
<center>Sending mail to faculties</center><br/>
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
						<div class="form-group">

<form method="post" action="process.php">	
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>

To:<br>
 

								<input type="email" value="<?php echo $row['email'] ?>" class="form-control" name="email"  readonly><br>

								
 Subject:<br>
  <input type="text" value="leave report" class="form-control" name="subject" readonly><br><br>
   message:<br/><input type="text" value="<?php if($row['leave_status']==2){echo approved;}else{echo rejected;} ?>" class="form-control" name="message" readonly><br><br>

  
 <button  type="submit" name="btn_send" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
							   </button>

               
         
		 </form>

<?php
$i++;
}
?>
</div>
</div>
</div>
</div>
</div>
</div>

<?php
require('footer.inc.php');
?>
</body>
</html>