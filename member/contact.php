<?php
	include "header.php"
?>
<?php
	
	if(isset($_POST["btnok"]))
	{
		$email=$_SESSION['username'];
		
		$title = $_POST['title'];
		$date = $_POST['date'];
		$des= $_POST['des'];

		$cn = mysqli_connect("localhost","root","","sms_admin_db");
		
		$q = "INSERT INTO feedback_info values (' ','$title','$des','$email','$date','','');";
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
<section class="page-title text-center" style="background-image:url(images/background/image1.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>Contact</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">home &nbsp;/</a>
                </li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<section class="section contact">
  <!-- container start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-5 ">
        <!-- address start -->
        <div class="address-block">
          <!-- Location -->
          <div class="media">
            <i class="far fa-map"></i>
            <div class="media-body">
              <h3>Location</h3>
              <p>India</p>
            </div>
          </div>
          <!-- Phone -->
          <div class="media">
            <i class="fas fa-phone"></i>
            <div class="media-body">
              <h3>Phone</h3>
              <p>
                9090909000
              </p>
            </div>
          </div>
          <!-- Email -->
          <div class="media">
            <i class="far fa-envelope"></i>
            <div class="media-body">
              <h3>Email</h3>
              <p>
                info@gmail.com
                <br>info@yahoo.com
              </p>
            </div>
          </div>
        </div>
        <!-- address end -->
      </div>
      <div class="col-lg-8 col-md-7">
        <div class="Feedback-form">
          <!-- contact form start -->
          <form action="#" class="row">
            <!-- name -->
            <div class="col-lg-6">
              <input type="text" name="name" class="form-control main" placeholder="Title" style=margin:5px; required>
            </div>
            <!-- email -->
            <!-- phone -->
            <div class="col-lg-6">
              <input type="date" name="date" class="form-control main" placeholder="Date" style=margin:5px; required>
            </div><br>
            <!-- message -->
            <div class="col-lg-12">
              <textarea style=margin:10px; name="des" rows="10" class="form-control main" placeholder="Your message"></textarea>
            </div><br>
            <!-- submit button -->
            <div class="col-md-12 text-right">
              <button class="btn btn-style-one" type="submit" name="btnok">Send Message</button>
            </div>
          </form>
          <!-- contact form end -->
        </div>
      </div>
    </div>
  </div>
  <!-- container end -->
</section>

<?php
	include "footer.php"
?>