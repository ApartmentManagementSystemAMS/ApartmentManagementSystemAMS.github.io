<?php
	include "header.php";
?>

<div class="container">
<br>
	<h2>News</h2>
	<p>Display Daily News Updates</p>            
	<table class="table table-striped">
	
    <thead>
      <tr>
        <th>Date</th>
        <th>News</th>
      </tr>
    </thead>
	<?php
		$cn= mysqli_connect("localhost","root","","sms_admin_db");
		$q="select * from news_info";
		
		$r=mysqli_query($cn,$q);
		while($row=mysqli_fetch_array($r))
		{
			$date = $row['n_date'] ;
			$news = $row['news'] ;
	?>
    <tbody>
      <tr>
        <td><i class="fas fa-calendar-alt"></i>    <?php echo $date ?></td>
        <td><?php echo $news ?></td>
      </tr>
    </tbody>
		<?php } ?>
  </table>
</div>
<?php
	include "footer.php";
?>