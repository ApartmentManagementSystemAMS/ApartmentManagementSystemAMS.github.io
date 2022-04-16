<?php
	$id=$_REQUEST['id'];
	
	$cn=mysqli_connect("localhost","root","","sms_admin_db");
	$q="delete from member_info where M_id = '$id'";
		
		$c=mysqli_query($cn,$q);
		if(isset($c))
		{
			?>
			<script>
				window.location="viewWingAdmin.php";
			</script>
			
			<?php
		}
		else
		{
			?>
			<script>
				alert("error");
				window.location="viewWingAdmin.php";
			</script>
			<?php
		}


?>
