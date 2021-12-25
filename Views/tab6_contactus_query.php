<!--Module - 1   -->
<div class="tab-pane fade content-page" id="module1">
        <div class="row">
        <div class="col">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Contact-us queries</h4>
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
                                        <th class="col-2.2">First Name</th>			
                                        <th class="col-2.2">Last Name</th>
                                        <th class="col-2.2">Email</th>
                                        <th class="col-2.2">Mobile Number</th>
                                        <th class="col-2.2">Posting Date</th>
                                        <th class="col-1">Action</th>												
                                    </tr>
                                </thead>									
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th class="col-2.2">First Name</th>			
                                        <th class="col-2.2">Last Name</th>
                                        <th class="col-2.2">Email</th>
                                        <th class="col-2.2">Mobile Number</th>
                                        <th class="col-2.2">Posting Date</th>					
                                        <th class="col-1">Action</th>		
                                    </tr>
                                </tfoot>                                
                                <tbody>
                                <?php
                                $i=1;
                                $inc=1;
                                $result=allqueries($conn);
                                $num=mysqli_num_rows($result);
                                if($num==0){
                                    echo "No Data Available";
                                }else{
                                    // $res = $result->fetch_assoc();
                                    while($res = mysqli_fetch_array($result)){
                                        ?>
                                        <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $res[1]; ?></td>
                                            <td><?php echo $res[2]; ?></td>
                                            <td><?php echo $res[3]; ?></td>
                                            <td><?php echo $res[4]; ?></td>
                                            <td><?php echo $res[6]; ?></td>
                                            <td><a class="viewMessage" data-id="<?php echo $res[0];?>"><i class="ri-chat-2-fill text-primary"></i></a>
                                            &nbsp;<a class="deleteMsg" data-id="<?php echo $res[0]; ?>"><i class="ri-delete-bin-6-fill mr-2 text-danger"></i></a></td> 
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


        <!--user View Modal -->
<div class="modal fade" id="msgModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">From : &nbsp;<h5 id="msgHeader"></h5></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="msghere">                        
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
</div>