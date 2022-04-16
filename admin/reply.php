<?php
	include "header.php";
	$id=$_REQUEST['id'];
?>
<?php
	if(isset($_POST["btnok"]))
	{
		
		$reply = $_POST['reply'];

		$cn = mysqli_connect("localhost","root","","sms_admin_db");
		
		$q = "Update complain_info set c_reply = '$reply'  where c_id = '$id'";
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
                                <h1>Add News</h1>
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
                                                <label class="col-lg-4 col-form-label" for="reply"> enter reply <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="reply" name="reply">
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