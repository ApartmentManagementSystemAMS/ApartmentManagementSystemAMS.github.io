<?php
	include "header.php";
	$id=$_REQUEST['id'];
	if(isset($_POST["btnok"]))
	{
		$con=mysqli_connect("localhost","root","","sms_admin_db");
			$q="select * from news_info where n_id='$id'";
			$c=mysqli_query($con,$q);
		
		$date = $_POST['n_date'];
		$n_news = $_POST['news'];

		
		
		$q = "update news_info set n_date='$date',news='$n_news'";
		$c=mysqli_query($con,$q);
		if($c)
		{
			
			
			?>
			<script>
				alert('succesful');
				window.location.replace("viewNews.php");
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
										<?php
												$cn=mysqli_connect("localhost","root","","sms_admin_db");
												$q="select * from news_info where n_id='$id'";
												$r=mysqli_query($cn,$q);
												while($row=mysqli_fetch_array($r))
												{
													 $date = $row['n_date'];
													 $n_news = $row['news'];
												}
												?>
										
										
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="n_date">Date <span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <input type="date" class="form-control" id="n_date" name="n_date"  value="<?php echo $date ?>">
                                                </div>
                                            </div>	                                                  
											<div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="news"> enter News <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="news" name="news"  value="<?php echo $n_news ?>">
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