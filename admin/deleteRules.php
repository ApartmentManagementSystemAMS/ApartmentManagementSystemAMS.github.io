<?php
	$id=$_REQUEST['id'];
	
	$cn=mysqli_connect("localhost","root","","sms_admin_db");
	$q="delete from rules_info where r_id = '$id'";
		
		$c=mysqli_query($cn,$q);
		if(isset($c))
		{
			?>
			<script>
				window.location="viewRules.php";
			</script>
			
			<?php
		}
		else
		{
			?>
			<script>
				alert("error");
				window.location="viewRules.php";
			</script>
			<?php
		}


?>
