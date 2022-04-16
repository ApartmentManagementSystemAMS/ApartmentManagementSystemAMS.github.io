<?php
	include "header.php";
	$uid=$_SESSION['user_id'];
?>
<div class="container">
<br>
	<h2>Rules</h2>            
	<table class="table table-striped">
	
    <thead>
      <tr>
        <th>Date</th>
		<th>Duration</th>
        <th>Occation</th>
		<th>Member</th>
      </tr>
    </thead>
	<?php
		$cn= mysqli_connect("localhost","root","","sms_admin_db");
		$q="select * from hall_booking_info";
		
		$r=mysqli_query($cn,$q);
		while($row=mysqli_fetch_array($r))
		{
			$date = $row['b_date'] ;
			$duration = $row['b_duration'];
			$occation = $row['b_occation'] ;
			$mem = $row['b_total_member'];
	?>
    <tbody>
      <tr>
        <td><i class="fas fa-calendar-alt"></i>    <?php echo $date ?></td>
		 <td><?php echo $duration ?></td>
		<td><?php echo $occation ?></td>
		<td><?php echo $mem ?></td>
		 
      </tr>
    </tbody>
		<?php } ?>
  </table>
</div>
<?php
	if(isset($_POST["btnok"]))
	{
		$name=$_SESSION['username'];
		$date = $_POST['date'];
		$occation= $_POST['occation'];
		$duration=$_POST['duration'];
		$total_mem=$_POST['total_mem'];

		$cn = mysqli_connect("localhost","root","","sms_admin_db");
		
		$q = "INSERT INTO hall_booking_info values (' ','$date','$duration','$occation','$total_mem','$uid')";
		$r = mysqli_query($cn,$q);
		if($r)
		{
			?>
			<script>
				alert('succesful');
				
			</script>
			<?php
		} 
		else
		{
			?>
			<script>
				alert('error');
			</script>
			<?php
			
		}
		
	}
   
?>
 <center><h4 class="card-title" style = margin:10px;>Hall - Booking</h4></center>
                
                <div class="card-body">
                  <form method="POST" action="#" >
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="email" name="email" value="<?php echo $_SESSION['username'];?>" disabled class="form-control">
                        </div>
                      </div>
                    </div>					
					<div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">date </label>
                          <input type="date" class="form-control" name="date">
                        </div>
                      </div>
					  <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Occation</label>
                          <input type="text" class="form-control" name="occation">
                        </div>
                    </div>
					
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group" style = margin:10px; >
                          <label class="bmd-label-floating" >Duration</label>
                          <input type="text" class="form-control" name="duration" >
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group" style = margin:10px;>
                          <label class="bmd-label-floating">Total Member</label>
                          <input type="text" class="form-control" name="total_mem">
                        </div>
                    </div>
                    </div>
					</div><br>
                    <button type="submit" class="btn btn-primary pull-right" name="btnok">Book my hall</button>
                    <div class="clearfix"></div>
					</form></div>
					<?php
					include "footer.php";
					?>
					