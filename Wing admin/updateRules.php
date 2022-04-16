<?php
	include "header.php";
	$id=$_REQUEST['id'];
	if(isset($_POST["btnok"]))
	{
		$con = mysqli_connect("localhost","root","","sms_admin_db");
		$q="select * from rules_info where r_id ='$id'";
			$c=mysqli_query($con,$q);
		$title = $_POST['title'];
		$des = $_POST['des'];
		$date= $_POST['date'];
		
		$q = "update rules_info set r_title='$title',r_description='$des',r_date='$date' where r_id ='$id'";
		$c = mysqli_query($con,$q);
			
		if($c)
		{
			?>
			<script>
				alert('succesful');
				window.location.replace("viewRules.php");
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

<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>update Rules</h1>
                            </div>
                        </div>
                    </div>                    
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-validation">
                                        <form class="form-valide" action="#" method="post">
										<?php 
											$cn= mysqli_connect("localhost","root","","sms_admin_db");
											$q="select * from rules_info where r_id ='$id'";
												
												$r=mysqli_query($cn,$q);
												while($row = mysqli_fetch_array($r))
												{
													$title = $row['r_title'];
													$des = $row['r_description'];
													$date = $row['r_date'] ;
												}
											?>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="title"> enter Title <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="title" name="title" value="<?php echo $title?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="description"> Description<span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="des" name="des" value="<?php echo $des?>">
                                                </div>
                                            </div>                                                                                     
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="date">Date <span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <input type="date" class="form-control" id="date" name="date" value="<?php echo $date?>">
                                                </div>
                                            </div>				
                                                                       
                                            <div class="form-group row">
                                                <div class="col-lg-8 ml-auto">
                                                    <input type="submit" class="btn btn-primary" value="Submit" name="btnok" />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </section>
            
	<?php
		include "footer.php"
	?>