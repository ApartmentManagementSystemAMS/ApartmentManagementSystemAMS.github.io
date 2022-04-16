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
                                    <h4>Complain listing </h4>                
                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select" class="display table table-borderd table-hover">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Title</th>
													<th>Description</th>
													<th>Reply</th>
													<th>Status</th>
													<th>action</th>
                                                </tr>
                                            </thead>

                                           <?php
												$cn= mysqli_connect("localhost","root","","sms_admin_db");
												$q="select * from complain_info";
												
												$r=mysqli_query($cn,$q);
												while($row=mysqli_fetch_array($r))
												{
											?>
											<tbody>
												<tr>
													<?php $id = $row['c_id'];?>
													<?php $title = $row['c_title'] ?>
													<?php $description = $row['c_description'] ?>
													<?php $reply = $row['c_reply'] ?>
													<?php $status = $row['c_status'] ?>
													<td><?php echo $id ?></td>
													<td><?php echo $title ?></td>
													<td><?php echo $description ?></td>
													<td><?php echo $reply ?></td>
													<td><?php echo $status ?></td>
													<td><a href="reply.php?id=<?php echo $row['c_id']; ?>">Reply</a>
													<a onclick="return confirm('Are you sure you want to remove this record?')" href="deleteComplain.php?id=<?php echo $row['c_id']; ?>">delete</a>
																								
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
                    <!-- /# row -->x

                    
                </section>
					<?php
include "footer.php";
?>


                    