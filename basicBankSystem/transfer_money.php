<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>Transfer Money</title>
	 <link rel="stylesheet" type="text/css" href="inStyle.css">
	<?php
	include 'link.php';
	?>
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
	<div class="main-div">
		<h1 class="font-weight-bold" style="padding: 15px 0px 10px;">TRANSFER MONEY</h1>
		<div class="">
			<table class="table table-dark table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>name</th>
						<th>email</th>
						<th>current balance</th>
						<th>TRANSFER</th>
					</tr>


				</thead>
				<tbody>
					<?php
					include 'connection.php';
					if($con){
						?>
						<script type="text/javascript">alert("connection successful");</script>
						<?php
					}
					else
					{
						echo ("<script LANGUAGE='JavaScript'>
				window.alert('error in connection');
				window.location.href='index.html';
				</script>");
					}
					$selectQuery="select * from bank.customers";
					$query=mysqli_query($con,$selectQuery);
					while ($res = mysqli_fetch_array($query)) {
						?>

						<tr>
							<td><?php echo $res['ID']; ?></td>
							<td><?php echo $res['name']; ?></td>
							<td><?php echo $res['email'];?></td>
							<td><?php echo "₹".$res['current_balance'];?></td>
							<td><form action="transfer.php" method="get">
								<input type="hidden" name="ID" value="<?php echo $res['ID']; ?>">
								<button type="submit" class="btn btn-outline-warning" name="submit">Transfer money</button></form></td>

							</tr>

							<?php
						}

						?>


					</tbody>
				</table>
			</div>
		</div>
		<script>
			$(document).ready(function(){
				$('[data-toggle="tooltip"]').tooltip();
			});
		</script>
	</body>

	</html>