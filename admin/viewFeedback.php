<?php 
include "header.php";
?>
    <div class="content-wrap">
        <div class="main"
            <div class="container-fluid">
                
                <!-- /# row -->
					<section id="main-content">
                    <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4> feedback Report </h4>
                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select" class="display table table-borderd table-hover">

                                            <thead>
                                                <tr>
                                                    <th>ID</th>		
													<th>Title</th>
                                                    <th>Message</th>
													<th>Email</th>
													<th>Date</th>
													<th>m_id</th>
													<th>ad_id</th>
													<th>Action</th>
                                                </tr>
                                            </thead>

                                            <?php
												$cn= mysqli_connect("localhost","root","","sms_admin_db");
												$q="select * from feedback_info";
												
												$r=mysqli_query($cn,$q);
												while($row=mysqli_fetch_array($r))
												{
											?>
											<tbody>
												<tr>
													<?php $id = $row['f_id'];?>
													<?php $title = $row['f_title'] ?>
													<?php $message = $row['f_message'] ?>
													<?php $email = $row['f_email'] ?>
													<?php $date = $row['f_date'] ?>
													<?php $mem_id = $row['m_id'] ?>
													<?php $ad_id = $row['ad_id'] ?>
													<td><?php echo $id ?></td>
													<td><?php echo $title ?></td>
													<td><?php echo $message ?></td>
													<td><?php echo $email?></td>
													<td><?php echo $date ?></td>
													<td><?php echo $mem_id?></td>
													<td><?php echo $ad_id?></td>
													<td>
													<a onclick="return confirm('Are you sure you want to remove this record?')" href="deletefeedback.php?id=<?php echo $row['f_id']; ?>">delete</a>
													</td>											
												</tr>
												
												</tbody>
												<?php
												}?>                                  
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->

                    
                </section>
					<?php
include "footer.php";
?>


                    