<?php
	include "header.php";
	$id=$_REQUEST['id'];
	if(isset($_POST["btnok"]))
	{
		$con=mysqli_connect("localhost","root","","sms_admin_db");
			$q="select * from maintenance_info where ma_id='$id'";
			$c=mysqli_query($con,$q);
		$mdate = $_POST['mdate'];
		$mtitle = $_POST['mtitle'];
		$mtype= $_POST['mtype'];
		$mimg = $_FILES['mimg']['name'];	
		$mnotes= $_POST['mnotes'];

		
	$q = "update maintenance_info set m_date='$mdate',m_title='$mtitle',m_type='$mtype',m_bill_image='$mimg',m_notes='$mnotes'";
		$c=mysqli_query($con,$q);
		if($c)
		
		{
			move_uploaded_file($_FILES['mimg']['tmp_name'],"uploaded_img/".$mimg);
			?>
			
			<script>
				alert('successful');
				window.location.replace("viewMaintainance.php");
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
                                <h1>Add Maintainance entry</h1>
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
                                        <form class="form-valide" action="#" method="POST" enctype="multipart/form-data">
										<?php
												$cn=mysqli_connect("localhost","root","","sms_admin_db");
												$q="select * from maintenance_info where ma_id='$id'";
												$r=mysqli_query($cn,$q);
												while($row=mysqli_fetch_array($r))
												{
													 $date = $row['m_date'];
													 $title = $row['m_title'];
													 $type = $row['m_type'] ;
													 $bill_image = $row['m_bill_image'];
													 $notes = $row['m_notes'];
												}
												?>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="mdate">Date <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="Date" class="form-control" id="mdate" name="mdate" value="<?php echo $date ?> ">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="mtitle">Title <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="mtitle" name="mtitle" value="<?php echo $title ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="mtype">Type <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="mtype" name="mtype" value="<?php echo $type ?>">
                                                </div>
                                            </div>                                            
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="mimg">Bill Image <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
													<input type="file" class="form-control" name="mimg" value="<?php echo $bill_image ?>">
                                                </div>
                                            </div> 
											<div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="mnotes">Notes <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <textarea class="form-control" id="mnotes" name="mnotes" rows="5" value="<?php echo $notes ?>"></textarea>
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