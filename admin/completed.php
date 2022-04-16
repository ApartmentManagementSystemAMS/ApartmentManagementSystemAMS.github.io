<?php
	session_start();
	$wid=$_REQUEST['id'];
	$uid=$_SESSION['user_id'];
	$uname=$_SESSION['username'];
	$cn= mysqli_connect("localhost","root","","sms_admin_db");
			$q="UPDATE complain_info set c_status='Completed' where c_id = '$wid'";
			$r=mysqli_query($cn,$q);
								
			if($r)
			{
			?> 
				<script>
				window.location="viewcomplain.php";
				</script> 
			<?php
			}
			else
			{
				echo "error";
			}								
?>

