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
                                    <h4>News listing </h4>
									<a style="float:right; color:blue" href="addNews.php">Add News</a>
                                    
                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select" class="display table table-borderd table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>News</th>
													<th>Action</th>
                                                </tr>
                                            </thead>
											<?php
												$cn= mysqli_connect("localhost","root","","sms_admin_db");
												$q="select * from news_info";
												
												$r=mysqli_query($cn,$q);
												while($row=mysqli_fetch_array($r))
												{
											?>
													
												<tbody>
												<tr>
													<?php $date = $row['n_date'] ?>
													<?php $n_news = $row['news'] ?>
													
													<td><?php echo $date ?></td>
													<td><?php echo $n_news ?></td>
													<td>
													
													<a onclick="return confirm('Are you sure you want to remove this record?')" href="deleteNews.php?id=<?php echo $row['n_id']; ?>">delete</a>
													<a onclick="return confirm('Are you sure you want to update this record?')" href="updateNews.php?id=<?php echo $row['n_id']; ?>">update</a>
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


                    