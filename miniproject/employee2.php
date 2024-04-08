<?php
require('top.inc.php');
if($_SESSION['ROLE']!=5){
	header('location:employee.php?id='.$_SESSION['USER_ID']);
	die();
}
if(isset($_GET['type']) && $_GET['type']=='delete' && isset($_GET['id'])){
	$id=mysqli_real_escape_string($con,$_GET['id']);
	mysqli_query($con,"delete from employee where id='$id'");
}

?>
<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">HOD</h4>
						   <h4 class="box_title_link"><a href="add_employee.php">Add HOD</a> </h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th width="5%">S.No</th>
                                       
                                       <th width="20%">Name</th>
									   <th width="15%">Email</th>
									   <th width="15%">Mobile</th>
									<th width="15%">designation</th>
                           
									  
                             <th width="15%">Department</th>
                             <th width="15%">Image</th>
									    
								
									
                                       <th width="20%"></th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php 
                           $r=mysqli_query($con,"SELECT * FROM `employee` join department on department.id=employee.department_id where employee.designation='hod' ");
                          
                                    
									$i=1;
									while($row=mysqli_fetch_assoc($r)){?>
                           
                           
									<tr>
                                       <td><?php echo $i?></td>
									  
                                       <td><?php echo $row['name']?></td>
									   <td><?php echo $row['email']?></td>
									   <td><?php echo $row['mobile']?></td>
										<td><?php echo $row['designation']?></td>
                              <td><?php echo $row['department']?></td>

                              <td><?php echo "<img src='image/".$row['image']."'style='width:100px;height:60px;' >"?></td>
		
									   <td><a href="update.php?id=<?php echo $row['id']?>">edit</a> <a href="employee2.php?id=<?php echo $row['id']?>&type=delete">Delete</a></td>
                                    </tr>
									<?php 
									$i++;
									} ?>
                           
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
		  </div>
         
<?php
require('footer.inc.php');
?>