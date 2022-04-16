<?php
	$id=$_REQUEST['id'];
	
	$cn=mysqli_connect("localhost","root","","sms_admin_db");
	$q="delete from hall_booking_info where b_id = '$id'";
		
		$c=mysqli_query($cn,$q);
		if(isset($c))
		{
			?>
			<script>
				window.location="viewBooking.php";
			</script>
			
			<?php
		}
		else
		{
			?>
			<script>
				alert("error");
				window.location="viewBooking.php";
			</script>
			<?php
		}


?>
