<?php
$username="root";
$password="";
$server="localhost";
$db="bank";

$con=mysqli_connect($server,$username,$password,$db);
if(!$con){
?>
	<script type="text/javascript">alert("connection unsuccessfull");</script>
<<?php 

}
 ?>


