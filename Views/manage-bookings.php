<?php

session_start();
error_reporting(0);

// Database config file
include('includes/config.php');

if(strlen($_SESSION['alogin'])==0){

	header('location:index.php');

}else{

	if(isset($_REQUEST['eid'])){
		$eid=intval($_GET['eid']);
		$status="2";
		$sql = "UPDATE tblbooking SET Status=:status WHERE  id=:eid";
		$query = $dbh->prepare($sql);
		$query -> bindParam(':status',$status, PDO::PARAM_STR);
		$query-> bindParam(':eid',$eid, PDO::PARAM_STR);
		$query -> execute();
		$msg="Booking Successfully Cancelled";
	}

	include 'roomservices.php';
	if(isset($_POST['BookNow'])){
		$name=$_POST['Name'];
		$email=$_POST['email'];
		$phonenumber=$_POST['Phone'];
		$eventname=$_POST['Eventname'];
		$time=$_POST['Time'];
		$booking=$_POST['Booking'];
		$fromdate=$_POST['FromDate'];
		$todate=$_POST['ToDate'];
		$sql="INSERT INTO tblbooking(name,userEmail,phone,event,time,booking,FromDate,ToDate) VALUES ('$name','$email','$phonenumber','$eventname','$time','$booking','$fromdate','$todate')";
		$query = $dbh->prepare($sql);
		$query->bindParam(':Name',$name,PDO::PARAM_STR);
		$query->bindParam(':email',$email,PDO::PARAM_STR);
		$query->bindParam(':Phone',$phonenumber,PDO::PARAM_STR);
		$query->bindParam(':Eventname',$eventname,PDO::PARAM_STR);
		$query->bindParam(':FromDate',$fromdate,PDO::PARAM_STR);
		$query->bindParam(':ToDate',$todate,PDO::PARAM_STR);
		$query->execute();      
	}

	//For sending mail to customer
	if(isset($_REQUEST['aeid'])){

		$aeid=intval($_GET['aeid']);
		$status=1;
		$sql = "UPDATE tblbooking SET Status=:status WHERE  id=:aeid";
		$query = $dbh->prepare($sql);
		$query -> bindParam(':status',$status, PDO::PARAM_STR);
		$query-> bindParam(':aeid',$aeid, PDO::PARAM_STR);
		$query -> execute();
		$msg="Booking Successfully Confirmed";
		
		$to_email= "jonsnow150601@gmail.com";
		$subject = "Booking at shree cottages!";
		$body = "Your booking is confirmed!! Wait for owners call for further details.";
		$headers = "deeprana12357@gmail.com";
		if(mail($to_email, $subject, $body, $headers)) {      
			echo "Mail sent successfully.";
		}else{
			echo "Failed";
		}

	}

	?>

	<!doctype html>
	<html lang="en" class="no-js">

	<head>

		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="theme-color" content="#3e454c">
		
		<title>User management | Shree</title>

		<?php include('headerlinks.php') ?>
		<!-- Custom Style -->
		<style>
			.errorWrap {
				padding: 10px;
				margin: 0 0 20px 0;
				background: #fff;
				border-left: 4px solid #dd3d36;
				-webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
				box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
			}
			.succWrap{
				padding: 10px;
				margin: 0 0 20px 0;
				background: #fff;
				border-left: 4px solid #5cb85c;
				-webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
				box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
			}
		</style>

	</head>

	<body>

		<!-- Including Header -->
		<?php include('includes/header.php');?>

		<div class="ts-main-content">
			<!-- Including LeftBar -->
			<?php include('includes/leftbar.php');?>
			<div class="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<h2 class="page-title">Manage Bookings</h2>
							<!-- Zero Configuration Table -->
							<div class="panel panel-default">
								<div class="panel-heading">Bookings Info</div>
								<div class="panel-body">
									<?php if($error){?><div class="errorWrap">
										<strong>ERROR</strong>:<?php echo htmlentities($error); 
									?>
								</div>
									<?php }else if($msg){?>
								<div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
									<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
										<thead>
											<tr>
												<th>#</th>
												<th>Name</th>
												<th>email</th>
												<th>phone</th>
												<th>eventname</th>
												<th>time</th>
												<th>booking</th>
												<th>FromDate</th>
												<th>ToDate</th>
												<th>Posting date</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>									
										<tfoot>
											<tr>
												<th>#</th>
												<th>Name</th>
												<th>email</th>
												<th>phone</th>
												<th>eventname</th>
												<th>time</th>
												<th>booking</th>
												<th>From Date</th>
												<th>To Date</th>
												<th>Posting date</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</tfoot>
										<!-- Table Body -->
										<tbody>

											<?php $sql = "SELECT * from tblbooking ";
												$query = $dbh -> prepare($sql);
												$query->execute();
												$results=$query->fetchAll(PDO::FETCH_OBJ);
												$cnt=1;
												if($query->rowCount() > 0){
												foreach($results as $result){
											?>	
											<tr>
												<td><?php echo htmlentities($cnt);?></td>
												<td><?php echo htmlentities($result->name);?></td>
												<td><?php echo htmlentities($result->userEmail);?></td>
												<td><?php echo htmlentities($result->phone);?></td>
												<td><?php echo htmlentities($result->event);?></td>
												<td><?php echo htmlentities($result->time);?></td>
												<td><?php echo htmlentities($result->booking);?></td>
												<td><?php echo htmlentities($result->FromDate);?></td>
												<td><?php echo htmlentities($result->ToDate);?></td>
												<td><?php echo htmlentities($result->PostingDate);?></td>
												<td>
													<?php 
														if($result->Status==0)
														{
														echo htmlentities('Not Confirmed yet');
														} else if ($result->Status==1) {
														echo htmlentities('Confirmed');
														}
														else{
															echo htmlentities('Cancelled');
														}
													?>
												</td>													
												<td><a href="manage-bookings.php?aeid=<?php echo htmlentities($result->id);?>"> Confirm</a> 
												<a href="manage-bookings.php?eid=<?php echo htmlentities($result->id);?>" onclick=""> Cancel</a></td>
												</tr>
												<?php $cnt=$cnt+1; }} ?>										
											</tbody>
									</table> 				
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Loading Scripts -->
		<?php include('javascriptlinks.php'); ?>

	</body>	

	</html>

<?php } ?>
