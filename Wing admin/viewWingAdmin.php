<?php 
include "header.php";
?>
<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
<section id="main-content">
<div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4> Member List </h4>
									<a style="float:right; color:blue" href="addWingAdmin.php">Add Member </a>
                                   
                                </div>
                                       
								<div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select" class="display table table-borderd table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>                                                   
                                                    <th>Contact no.</th>
                                                    <th>E-mail</th>
													<th>Birth-date</th>
													<th>Member_name</th>
													<th>Wing_no</th>
													<th>Flat_no</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
											<?php
												$cn= mysqli_connect("localhost","root","","sms_admin_db");
												$q="select * from member_info";
												
												$r=mysqli_query($cn,$q);
												while($row=mysqli_fetch_array($r))
												{
											?>
													
												<tbody>
												<tr>
													<?php $name = $row['Name'] ?>
													<?php $contact = $row['Contact_no'] ?>
													<?php $email = $row['Email_id'] ?>
													<?php $birth_date = $row['DOB'] ?>
													<?php $mem_name = $row['family_member_name'] ?>
													<?php $wing_no = $row['Wing_no'] ?>
													<?php $flat_no = $row['Flat_no'] ?>
													<td><?php echo $name ?></td>
													<td><?php echo $contact ?></td>
													<td><?php echo $email ?></td>
													<td><?php echo $birth_date ?></td>
													<td><?php echo $mem_name ?></td>
													<td><?php echo $wing_no ?></td>
													<td><?php echo $flat_no ?></td>
													<td>
													<a onclick="return confirm('Are you sure you want to update this record?')" href="updateWingAdmin.php?id=<?php echo $row['M_id']; ?>">update</a>
													<a onclick="return confirm('Are you sure you want to remove this record?')" href="deleteWingAdmin.php?id=<?php echo $row['M_id']; ?>">delete</a>
													</td>
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
					</section>
                                                
<?php
include "footer.php";
?>
