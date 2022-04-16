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
                                    <h4> Booking List </h4>	
                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select" class="display table table-borderd table-hover">

                                            <thead>
                                                <tr>
                                                    <th>ID</th>	
													<th>Name</th>
                                                    <th>Date</th>
													<th>Duration</th>
													<th>Occation</th>
													<th>Total memeber</th>
													<th>Action</th>
                                                </tr>
                                            </thead>

                                            <?php
												$cn= mysqli_connect("localhost","root","","sms_admin_db");
												$q="select * from hall_booking_info;";
												
												$r=mysqli_query($cn,$q);
												while($row=mysqli_fetch_array($r))
												{
											?>
											<tbody>
												<tr>
													<?php $id = $row['b_id'];?>
													<?php $name = $row['b_name'] ?>
													<?php $date = $row['b_date'] ?>
													<?php $duration = $row['b_duration'] ?>
													<?php $occation = $row['b_occation'] ?>
													<?php $total_member = $row['b_total_member'] ?>
													<td><?php echo $id ?></td>
													<td><?php echo $name ?></td>
													<td><?php echo $date ?></td>
													<td><?php echo $duration ?></td>
													<td><?php echo $occation ?></td>
													<td><?php echo $total_member ?></td>
													<td>
													<a onclick="return confirm('Are you sure you want to remove this record?')" href="deletebooking.php?id=<?php echo $row['b_id']; ?>">delete</a>
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


                    