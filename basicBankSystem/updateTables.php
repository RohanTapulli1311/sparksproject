<?php


$reciever=$_session['transfer_to'];
$amount=$_session['amount'];
$ID=$_session['ID'];
$sender=$_session['sender'];


include 'connection.php';

$fetch="select current_balance from bank.customers where ID='$ID'";
$query=mysqli_query($con,$fetch);
while($res=mysqli_fetch_array($query)){
	$balance= $res['current_balance'];
}

$fetch2="select current_balance from bank.customers where name='$reciever'";
$query2=mysqli_query($con,$fetch2);
while($res2=mysqli_fetch_array($query2)){
	$balance2= $res2['current_balance'];
}

if(($balance-$amount)>=500){
	$finalB=$balance-$amount;
	$finalB2=$balance2+$amount;
	$update="update bank.customers set current_balance='$finalB' where ID='$ID'";
	$update2="update bank.customers set current_balance='$finalB2' where name='$reciever'";
	$execute1=mysqli_query($con,$update);
	$execute2=mysqli_query($con,$update2);
	if ($execute2 && $execute1){
		//echo "transfer done";
		$insertQuery="insert into transaction(transfer_from,transfer_to,amount) values ('$sender','$reciever','$amount')";
		$exequery=mysqli_query($con,$insertQuery);
		if($exequery){
			//echo "</br>table updated";
			echo ("<script LANGUAGE='JavaScript'>
				window.alert('Transaction Successful.');
				window.location.href='transaction_display.php';
				</script>");
		}
		else{
			//echo "</br>cannot update";
			echo ("<script LANGUAGE='JavaScript'>
				window.alert('Transaction Unsuccessful.');
				window.location.href='index.html';
				</script>");
		}

	}
	else
	{

		echo ("<script LANGUAGE='JavaScript'>
			window.alert('Transfer failed');
			window.location.href='transfer_money.php';
			</script>");

	}
}
else{
	echo ("<script LANGUAGE='JavaScript'>
		window.alert('Insufficient Funds; Transfer failed');
		window.location.href='transfer_money.php';
		</script>");
}

