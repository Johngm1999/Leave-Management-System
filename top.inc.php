	 <?php
require('db.inc.php');
$id='';
$image='';
if(!isset($_SESSION['ROLE'])){
	header('location:login.php');
	die();
}
if(isset($_GET['id'])){
	$id=mysqli_real_escape_string($con,$_GET['id']);
	if($_SESSION['ROLE']==1 && $_SESSION['USER_ID']!=$id){
		die('Access denied');
	}


//$image=$row['image'];
	
}
$res=mysqli_query($con,"select * from employee where id='$id'");

	
?>
<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
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
      <aside id="left-panel" class="left-panel">
         <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
               <ul class="nav navbar-nav">
                  <li class="menu-title">Menu</li>
                  <?php switch ($_SESSION['ROLE']) {
                     case 5: ?>
                     <li class="menu-item-has-children dropdown">
                     <a href="hod_profile.php?id=<?php echo $_SESSION['USER_ID'] ?>" > Home</a>
                  </li>
				 <li class="menu-item-has-children dropdown">
                     <a href="hod_profile.php?id=<?php echo $_SESSION['USER_ID'] ?>" > Profile</a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a href="index.php" > Departments</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="leave_type.php" > Leave Types</a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a href="employee2.php" > Hod</a>
                  </li>
		<li class="menu-item-has-children dropdown">
                     <a href="leave2.php" > Leave approval</a>
                  </li>
		<!-- <li class="menu-item-has-children dropdown">
                     <a href="feedindex.php?id=<?php echo $_SESSION['USER_ID'] ?>" > feedback</a>
                  </li> -->
				  <?php break;
                     case 2: ?>
				  <li class="menu-item-has-children dropdown">
                     <a href="hod_profile.php?id=<?php echo $_SESSION['USER_ID'] ?>" > Profile</a>
                  </li>
		<li class="menu-item-has-children dropdown">
                     <a href="add_leave3.php" > Leave</a>
                  </li>	
		<!-- <li class="menu-item-has-children dropdown">
                     <a href="feedindex.php?id=<?php echo $_SESSION['USER_ID'] ?>" > feedback</a>
                  </li>	    -->
							  
			<?php break;
                     case 3: ?>
				  <li class="menu-item-has-children dropdown">
                     <a href="hod_profile.php?id=<?php echo $_SESSION['USER_ID'] ?>" > Profile</a>
              </li>
    
			  <li >
                     <!-- <a  style="color: brown; font-weight: bold;">Employee</a> -->
                     <ul>
                       <li class="menu-item-has-children dropdown"> <a href="employee.php">Teaching Staffs</a></li>
                       <li class="menu-item-has-children dropdown"> <a href="non_employee.php">Non Teaching Staffs</a></li></ul>
                  </li>  
                   
                  <li class="menu-item-has-children dropdown">
                     <a href="add_leave2.php" > Leave</a>
                  </li>
				  
				
		<!-- <li class="menu-item-has-children dropdown">
                     <a href="feedindex.php?id=<?php echo $_SESSION['USER_ID'] ?>" > feedback</a>
                  </li> -->
				  <?php break;
                     case 4: ?>
	
				  <li class="menu-item-has-children dropdown">
                     <a href="hod_profile.php?id=<?php echo $_SESSION['USER_ID'] ?>" > Profile</a>
                  </li>
  <!-- <li class="menu-item-has-children dropdown">
                     <a href="feedback_get.php" >FeedBack</a>
                  </li>
		 -->

		<?php break;
         case 6: ?>
	
   <li class="menu-item-has-children dropdown">
                     <a href="hod_profile.php?id=<?php echo $_SESSION['USER_ID'] ?>" > Profile</a>
              </li>
                   
                  <li class="menu-item-has-children dropdown">
                     <a href="add_leave4.php"> Leave</a>
                  </li>
<!-- 				  
                  <li class="menu-item-has-children dropdown">
                     <a href="feedback_get.php" >FeedBack</a>
                  </li>   -->
			<?php break;
                  }?>
			
               </ul>
            </div>
         </nav>
      </aside>
      <div id="right-panel" class="right-panel">
         <header id="header" class="header">
            <div class="top-left">
               <div class="navbar-header">
                  <a class="navbar-brand" href="index.php"><h6 style="width:130px;height:40px;"></h6></a>
                  
                  <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
               </div>
            </div>
            <div class="top-right">
               <div class="header-menu">
	
                  <div class="user-area dropdown float-right">

                     <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">welcome <?php $i=1;
									echo strtoupper($_SESSION['USER_NAME']);
 									                               	
						 
									$i=1;
									//while($row=mysqli_fetch_assoc($res))
{?>
					
									<?php echo "<img src='image/".$_SESSION['IMAGE']."'style='width:30px;height:30px;border-radius:50%;' >"?>
									<?php 
									$i++;
									} ?>
				
	</a>
                     <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i>Logout</a>
                     </div>
                  </div>
               </div>
            </div>
         </header>