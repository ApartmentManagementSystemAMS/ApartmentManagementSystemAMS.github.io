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
                                    <h4>rules listing </h4>
									<a style="float:right; color:blue" href="addRules.php">Add New rules </a>
                                    
                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select" class="display table table-borderd table-hover">
                                            <thead>
                                                <tr>
													<th>Title</th>
                                                    <th>Description</th>
													<th>Date</th>
													<th>Action</th>
                                                </tr>
                                            </thead>
											<?php
												$cn= mysqli_connect("localhost","root","","sms_admin_db");
												$q="select * from rules_info";
												
												$r=mysqli_query($cn,$q);
												while($row=mysqli_fetch_array($r))
												{
											?>
													
												<tbody>
												<tr>
													<?php $title = $row['r_title'] ?>
													<?php $des = $row['r_description'] ?>
													<?php $date = $row['r_date'] ?>
													
													<td><?php echo $title ?></td>
													<td><?php echo $des ?></td>
													<td><?php echo $date ?></td>
													<td>
													<a onclick="return confirm('Are you sure you want to update this record?')" href="updateRules.php?id=<?php echo $row['r_id']; ?>">update</a>
													<a onclick="return confirm('Are you sure you want to remove this record?')" href="deleteRules.php?id=<?php echo $row['r_id']; ?>">delete</a>
													</td>
													</a>
																								
													</a>
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


                    