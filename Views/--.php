<!--Module - 1   -->
<div class="tab-pane fade content-page" id="module1">
        <div class="row">
        <div class="col">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Active Users</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                            <div class="dropdown">
                                 <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                                 <i class="ri-more-fill"></i>
                                 </span>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="table-responsive">
                            <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">                                
                                <thead>
											<tr>
												<th>#</th>
												<th>Name</th>
												<!-- <th>email</th> -->
												<!-- <th>phone</th> -->
												<th>eventname</th>
												<th>time</th>
												<th>booking</th>
												<th>FromDate</th>
												<th>ToDate</th>
												<!-- <th>Posting date</th> -->
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>									
										<tfoot>
											<tr>
												<th>#</th>
												<th>Name</th>
												<!-- <th>email</th> -->
												<!-- <th>phone</th> -->
												<th>eventname</th>
												<th>time</th>
												<th>booking</th>
												<th>From Date</th>
												<!-- <th>Posting date</th> -->
                                                <th>Status</th>			
												<th>To Date</th>												
												<th>Action</th>
											</tr>
										</tfoot>
										<!-- Table Body -->
										<tbody>
                                <?php
                                $i=1;
                                $inc=1;
                                $result=allusers($conn);
                                $num=mysqli_num_rows($result);
                                if($num==0){
                                    echo "No Data Available";
                                }else{
                                    //$res = $result->fetch_assoc();

                                    while($res = mysqli_fetch_array($result)){
                                        ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $res['name']; ?></td>
                                            <!-- <td><?php echo $res['userEmail']; ?></td> -->
                                            <!-- <td><?php echo $res['phone']; ?></td> -->
                                            <td><?php echo $res['event']; ?></td>
                                            <td><?php echo $res['time']; ?></td>
                                            <td><?php echo $res['booking']; ?></td>
                                            <td><?php echo $res['FromDate']; ?></td>
                                            <!-- <td><?php echo $res['PostingDate']; ?></td> -->
                                            <td><?php echo $res['ToDate']; ?></td>                                             
                                            <td><span class="badge border border-primary text-primary">
                                                <?php if($res['Status']==-1) {?>
                                                    <span data-placement="top" title="" data-original-title="Accept" data-toggle="tooltip" class="text-success" id="desac<?php echo $res['id']; ?>" onclick="accept(<?php echo $res['id']; ?>)" style="cursor:pointer;">Accept</span>
                                                    <span id="sl<?php echo $res['id']; ?>">/</span><span  data-placement="top" title="" data-original-title="Reject" data-toggle="tooltip" class="text-danger" id="desrj<?php echo $res['id']; ?>" onclick="reject(<?php echo $res['id']; ?>)" style="cursor:pointer;"class="text-danger"> Reject</span>
                                                <?php }else{ ?>
                                                    <?php if($res['Status']==0){ ?>
                                                    <span class="text-success" id="desac<?php echo $res['id']; ?>" onclick="accept(<?php echo $res['id']; ?>)">Accepted!! </span>
                                                <?php }else{ ?>
                                                    <span id="desrj<?php echo $res['id']; ?>" onclick="reject(<?php echo $res['id']; ?>)" class="text-danger"> Rejected!!</span>
                                                <?php } ?>
                                                </span>
                                                <a class="changethisIddes" id="<?php echo $res['id']; ?>" data-placement="top" title="" data-original-title="Edit" data-toggle="tooltip" class="chdecision" data-id="<?php echo $res['id'];?>"><i class="ri-pencil-fill"></i></a>                                                
                                                <?php } ?>
                                                
                                            </td>                                            
                                            <td>
                                            <div class="flex align-items-center list-user-action">
                                                <?php
                                                $per = fetchrole1($conn,$_SESSION['rid']);
                                                $s = $per['permisions'];
                                                if(str_contains($s,'m2-1')){?>
                                                    <!-- <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" 
                                                    class="updateuserinfo iq-bg-primary" id="<?php echo $res['id']; ?>"><i class="ri-pencil-line"></i></a> -->
                                                    <a data-toggle="tooltip" data-placement="top" title="" data-original-title="View"
                                                    class="iq-bg-primary viewuserinfo" id="<?php echo $res['id']; ?>"><i class="ri-eye-fill"></i></a>
                                                <?php } if(str_contains($s,'m2-2')){?>
                                                <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"
                                                    class="iq-bg-primary" id="delbo" data-id="<?php echo $res['id']; ?>"><i class="ri-delete-bin-line"></i></a><?php }?>
                                            </td>
                                                </div>
                                        </tr>
                                        <?php
                                        $i++;$inc++;
                                    }
                                }
                                ?>
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>