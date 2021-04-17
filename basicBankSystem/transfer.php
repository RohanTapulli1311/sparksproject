<?php
session_start();


?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="inStyle.css">
	<?php
	include 'link.php';
	?>
	<title>Transfer money</title>
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
		<!-- Brand/logo -->
		<a class="navbar-brand" href="https://www.thesparksfoundationsingapore.org/">
			<img src="images/tsf.png" alt="Logo" style="width:40px;">
		</a>
		<div class="container">
			<h3 class="navbar-brand text-warning font-weight-bold " style="margin-top:5px">SPARKS BANK</h3>
		</div>

		<!-- Links -->
		<ul class="navbar-nav mr-auto ">
			<li class="nav-item">
				<a class="nav-link text-white" href="index.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="index.php#services">Services</a>
			</li>

		</ul>

		<button class="btn btn-outline-warning mr-sm-2" onclick="location.href = 'https://www.thesparksfoundationsingapore.org/contact-us/';">Contact US</button>
		>
	</nav>
	<div class=" main-div " class="border: 1px solid black">
		<h1 class="font-weight-bold" style="padding:15px 0px 10px">Transaction: Fill details</h1>
		<div class="card" style="margin:0 auto; width: 800px;">
			<form action="" method="POST">
				<div class="form-group">
					<?php 
					include 'connection.php';
					
					$ID=$_GET['ID'];
					$selectQuery="select name from bank.customers where ID !='$ID'";
					$selectQuery2="select name from bank.customers where ID ='$ID'";

					$query2=mysqli_query($con,$selectQuery2);
					while($res2=mysqli_fetch_array($query2)){
						$sender=$res2['name'];
					}
					?>

					<label class="font-weight-bold">Sender Details:</label>
					<table class="table table-dark table-hover">
						<thead>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Email-ID</th>
								<th>Current Balance</th>

							</tr>


						</thead>
						<tbody>
							<?php
							$selectQuery3="select * from bank.customers where name='$sender'";
							$query3=mysqli_query($con,$selectQuery3);
							while ($res3 = mysqli_fetch_array($query3)) {
								?>

								<tr>
									<td><?php echo $res3['ID']; ?></td>
									<td><?php echo $res3['name']; ?></td>
									<td><?php echo $res3['email']; ?></td>
									<td><?php echo $res3['current_balance'];?></td>



									<?php
								}

								?>


							</tbody>
						</table>
					</div>
					<div class="form-group">
						<label class="font-weight-bold">Select Recipient</label>

						<select  class="form-control" name="transfer_to">
							<?php


							$query=mysqli_query($con,$selectQuery);
							while($res=mysqli_fetch_array($query)){
								?>

								<option value="<?php echo($res['name'])?>"><?php echo($res['name'])?></option>

								<?php

							}


							?>
						</select>

					</div>
				</br>

			</br>
			<div class="form-group col-xs-3">
				<label class="font-weight-bold"> Enter amount to be transferred</label> 
				<input type="text" name="amount" class="form-control">
			</div>
			<button type="submit" class="btn btn-warning text-white" name="submit">Transfer</button>
		</form>
	</div>
</body>
</div>
</html>
<?php
if(isset($_POST['submit'])){
	$rec= $_POST['transfer_to'];
	$amt= $_POST['amount'];
	$_session['ID']=$ID;
	$_session['transfer_to']=$rec;
	$_session['amount']=$amt;
	$_session['sender']=$sender;

	include 'updateTables.php';

}

?>


