<?php
require('top.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
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
<center>Search a faculty name to send mail</center><br/>
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">


                        <div class="card-body">
						<div class="form-group">

  <form class="form-inline" method="post" action="search.php">

    <input type="text" name="name" class="form-control" placeholder="Enter a name" required>
    <button type="submit" name="save" class="btn btn-primary">Search</button>
  </form>
</div>
</div>
</div>
</div>
</div>
</div>
<?php
require('footer.inc.php');
?></div>
</body>
</html>