<?php
	include "header.php";
?>
<?php
	if(isset($_POST["btnok"]))
	{
		
		$title = $_POST['title'];
		$des = $_POST['des'];
		$date= $_POST['date'];

		$cn = mysqli_connect("localhost","root","","sms_admin_db");
		
		$q = "INSERT INTO rules_info values (' ','$title','$des','$date')";
		$r = mysqli_query($cn,$q);
		
		if($r)
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
                                <h1>Add Rules</h1>
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
                                                <label class="col-lg-4 col-form-label" for="title"> enter Title <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter new rules..">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="description"> Description<span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="des" name="des" placeholder="Your valid email..">
                                                </div>
                                            </div>                                                                                     
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="date">Date <span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <input type="date" class="form-control" id="date" name="date">
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