<?php
	include "header.php";
?>
<?php
	if(isset($_POST["btnok"]))
	{
		
		$title = $_POST['title'];
		$message = $_POST['message'];
		$email= $_POST['email'];
		$date= $_POST['date'];
		$m_id= $_POST['mem_id'];
		$ad_id= $_POST['ad_id'];
		

		$cn = mysqli_connect("localhost","root","","sms_admin_db");
		
		$q = "INSERT INTO feedback_info values (' ','$title','$message','$email','$date','$m_id','$ad_id')";
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

<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Add Wing Admin</h1>
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
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="name">title <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter a name..">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="email">Email <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="email" name="email" placeholder="Your valid email..">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="password">Password <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="password" class="form-control" id="password" name="password" placeholder="Choose a safe one..">
                                                </div>
                                            </div>                                            
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="contact">contact <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <textarea class="form-control" id="contact" name="contact" rows="5" placeholder="Enter your contact no..."></textarea>
                                                </div>
                                            </div>                                            
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="birth_date">DOB <span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <input type="date" class="form-control" id="birth_date" name="birth_date">
                                                </div>
                                            </div>												 
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="wing_s">Wing Selection <span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="wing_s" name="wing_s" placeholder="select wing....">
                                                </div>
												
                                            </div>
											<div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="flat_no">Flat no. <span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="flat_no" name="flat_no" placeholder="enter flat no....">
                                                </div>
                                            </div> 
                                                                            
                                            <div class="form-group row">
                                                <div class="col-lg-8 ml-auto">
                                                    <input type="submit" name="btnok" class="btn btn-primary" value="add" />
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