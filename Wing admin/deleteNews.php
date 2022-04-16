<?php
	$id=$_REQUEST['id'];
	
	$cn=mysqli_connect("localhost","root","","sms_admin_db");
	$q="delete from news_info where n_id = '$id'";
		
		$c=mysqli_query($cn,$q);
		if(isset($c))
		{
			?>
			<script>
				window.location="viewNews.php";
			</script>
			
			<?php
		}
		else
		{
			?>
			<script>
				alert("error");
				window.location="viewNews.php";
			</script>
			<?php
		}


?>
