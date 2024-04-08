<?php
require('top.inc.php');

if (isset($_GET['type']) && $_GET['type'] == 'delete' && isset($_GET['id'])) {
	$id = mysqli_real_escape_string($con, $_GET['id']);
	mysqli_query($con, "delete from `leave` where id='$id'");
}
if (isset($_GET['type']) && $_GET['type'] == 'update' && isset($_GET['id'])) {
	$id = mysqli_real_escape_string($con, $_GET['id']);
	$status = mysqli_real_escape_string($con, $_GET['status']);
	mysqli_query($con, "update `hod_leave` set leave_status='$status' where id='$id'");
}
if ($_SESSION['ROLE'] == 5) {
	$sql = "SELECT * FROM employee join hod_leave on hod_leave.employee_id=employee.id join leave_type on hod_leave.leave_id=leave_type.id";
}
$res = mysqli_query($con, $sql);
?>
<div class="content pb-0">
	<div class="orders">
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
						<h4 class="box-title">Leave approval </h4>
						<?php if ($_SESSION['ROLE'] == 2) { ?>
						<h4 class="box_title_link"><a href="hod_leave.php">Add Leave</a> </h4>

						<?php } elseif ($_SESSION['ROLE'] == 3) { ?>
						<h4 class="box_title_link"><a href="add_leave.php">Add Leave</a> </h4>
						<h4 class="box_title_link"><a href="add_leave2.php">Leave approval</a> </h4>

						<?php } ?>
					</div>
					<div class="card-body--">
						<div class="table-stats order-table ov-h">
							<table class="table ">
								<thead>
									<tr>
										<th width="5%">S.No</th>
										<th width="15%">Employee Name</th>
										<th width="14%">From</th>
										<th width="14%">To</th>
										<th width="13%">Leave Type</th>
										<th width="15%">Leave Status</th>
										<th width="10%"></th>
										<th width="10%"></th>
										<th width="10%"></th>

									</tr>
								</thead>
								<tbody>
									<?php
                                    $i = 1;
                                    while ($row = mysqli_fetch_assoc($res)) { ?>
									<tr>
										<td><?php echo $i ?></td>

										<td><?php echo $row['name'] ?></td>
										<td><?php echo $row['leave_from'] ?></td>
										<td><?php echo $row['leave_to'] ?></td>
										<td><?php echo $row['leave_type'] ?></td>
										

										<!-- <td><//?php echo $row['alternate']?></td> -->

										<td>
											<?php
	                                    if ($row['leave_status'] == 1) {
		                                    echo "Applied";
	                                    }
	                                    if ($row['leave_status'] == 2) {
		                                    echo "Approved";
	                                    }
	                                    if ($row['leave_status'] == 3) {
		                                    echo "Rejected";
	                                    }
                                           ?>
											<?php if ($_SESSION['ROLE'] == 5) { ?>
											<select class="form-control"
												onchange="update_leave_status('<?php echo $row['id'] ?>',this.options[this.selectedIndex].value)">
												<option value="">Update Status</option>
												<option value="2">Approved</option>
												<option value="3">Rejected</option>
											</select>

											<?php } ?>

										</td>
										<style>
											
											.button2 {
	color: black;
	background-color: $teal;
	transition: .2s ease-in-out;
	border-left: 3px transparent solid;
	border-right: 3px transparent solid;
}

.button2:hover {
	color: #10FFB4;
	background-color: #10FFB4;
	border-left: $teal 3px solid;
	border-right: $teal 3px solid;
}
</style>
<div class="container">
	<div class="buttons">
										<td> <button class="button2"><a href="viewleave1.php?id=<?php echo $row['id']?>">view&nbsp&nbsp&nbsp</a></button></td></div></div>

										<td>
											

											<?php

	                                    if ($row['leave_status'] == 2) { ?>
											<a href="send.php?id=<?php echo $row['id'] ?>">Send Mail</a>

											<?php } else if ($row['leave_status'] == 3) { ?>
											<a href="send.php?id=<?php echo $row['id'] ?>">Send Mail</a>
											<?php } else { ?>

											<a href="leave2.php?id=<?php echo $row['id'] ?>">delete</a><?php } ?>
										</td>


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
<script>
	function update_leave_status(id, select_value) {
		window.location.href = 'leave2.php?id=' + id + '&type=update&status=' + select_value;
	}
</script>
<?php



require('footer.inc.php');
?>