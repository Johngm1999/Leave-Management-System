<?php
require('top.inc.php');

if(count($_POST)>0) {
$name=$_POST[name];
$result = mysqli_query($con,"SELECT * FROM employee where name='$name' ");
}
?>
<!DOCTYPE html>
<html >
<head>
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
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
						<div class="form-group">
						<form class="form-inline" method="post" action="indesx2.php">
    <input type="text" name="name" class="form-control" placeholder="Search roll no..">
    <button type="submit" name="save" class="btn btn-primary">Search</button>
 </form>
 
To:<br>
 

								<input type="email" value="<?php echo $row['email'] ?>"  name="email"><br>

	<form method="post" action="process.php">								
 Subject:<br>
  <input type="text" name="subject"><br><br>
 <textarea rows="4" cols="40" name="message">
</textarea> <br/><br/>
 <button  type="submit" name="btn_send" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
							   </button>

               
         
		 </form>
		 <script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="assets/js/popper.min.js" type="text/javascript"></script>
      <script src="assets/js/plugins.js" type="text/javascript"></script>
      <script src="assets/js/main.js" type="text/javascript"></script>
  </body>
</html>