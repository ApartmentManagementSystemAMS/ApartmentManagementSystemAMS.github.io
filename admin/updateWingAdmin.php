<?php
include "header.php";
$id=$_REQUEST['id'];
if(isset($_POST['btnok']))
{
			$con=mysqli_connect("localhost","root","","sms_admin_db");
			$q="select * from wing_admin_info where Wad_id='$id'";
			$c=mysqli_query($con,$q);
		$name = $_POST['name'];
		$contact = $_POST['contact'];
		$email= $_POST['email'];
		$birth_date= $_POST['birth_date'];
		$wing_s= $_POST['wing_s'];
		$flat_no= $_POST['flat_no'];

		$q="update wing_admin_info set Name='$name',Contact_no='$contact',Email_id='$email',DOB='$birth_date',Wing_Selection='$wing_s',Flat_no='$flat_no' where Wad_id ='$id'";
		echo $q;
		$c=mysqli_query($con,$q);
		if(isset($c))
		{
			?>
			
			<script>
			alert("sucess");
			window.location="viewWingAdmin.php";
			</script>
		
			<?php
		}
		else
		{
			?>
			<script> alert("error");</script>
			<?php
		}

}

?>
 
<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
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
												$q="select * from wing_admin_info where Wad_id='$id'";
												
												$r=mysqli_query($cn,$q);
												while($row=mysqli_fetch_array($r))
												{
													$name = $row['Name'] ;
													$contact = $row['Contact_no'] ;
													$email = $row['Email_id'] ;
													$birth_date = $row['DOB'] ;
													$wing_s = $row['Wing_Selection'];
													$flat_no = $row['Flat_no'];
												}
										?>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="name">Name <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $name ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="email">Email <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $email ?>">
                                                </div>
                                            </div>
                                                                                       
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="contact">contact <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="contact" name="contact" value="<?php echo $contact ?>">
                                                </div>
                                            </div>                                            
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="birth_date">DOB <span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <input type="date" class="form-control" id="birth_date" name="birth_date" value="<?php echo $birth_date ?>">
                                                </div>
                                            </div>												 
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="wing_s">Wing Selection <span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="wing_s" name="wing_s" value="<?php echo $wing_s ?>">
                                                </div>
												
                                            </div>
											<div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="flat_no">Flat no. <span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="flat_no" name="flat_no" value="<?php echo $flat_no ?>">
                                                </div>
                                            </div> 
                                                                            
                                            <div class="form-group row">
                                                <div class="col-lg-8 ml-auto">
                                                    <input type="submit" name="btnok" class="btn btn-primary" value="update" />
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
	include "footer.php";
?>