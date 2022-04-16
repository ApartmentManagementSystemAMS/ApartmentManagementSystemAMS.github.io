<?php
	include "header.php";
?>

<div class="container">
<br>
	<h2>Rules</h2>            
	<table class="table table-striped">
	
    <thead>
      <tr>
        <th>Date</th>
        <th>Title</th>
		<th>Description</th>
      </tr>
    </thead>
	<?php
		$cn= mysqli_connect("localhost","root","","sms_admin_db");
		$q="select * from rules_info";
		
		$r=mysqli_query($cn,$q);
		while($row=mysqli_fetch_array($r))
		{
			$date = $row['r_date'] ;
			$title = $row['r_title'] ;
			$des = $row['r_description'];
	?>
    <tbody>
      <tr>
        <td><i class="fas fa-calendar-alt"></i>    <?php echo $date ?></td>
        <td><?php echo $title ?></td>
		 <td><?php echo $des ?></td>
      </tr>
    </tbody>
		<?php } ?>
  </table>
</div>
<?php
	include "footer.php";
?>