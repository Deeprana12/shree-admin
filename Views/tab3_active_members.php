<!-- User module -->
<div class="tab-pane fade content-page" id="users">
    <div class="row">
        <div class="col">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Active Members</h4>
                    </div>
                    <div class="iq-card-header-toolbar d-flex align-items-center">
                        <div class="dropdown">
                                <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                                <i class="ri-more-fill"></i>
                                </span>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                                <!--<a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>-->
                                <!--<a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>-->
                                <!--<a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>-->
                                <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="iq-card-body">
                    <div class="table-responsive">
                        <table  id="user-list-table" class="table table-striped table-bordered mt-4" role="grid">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Roles</th>
                                    <th scope="col">operation</th>

                                </tr>
                            </thead>
                            <tbody>
                                    <?php
                                    $i=1;

                                    $result=alluser($conn);

                                    $num=mysqli_num_rows($result);
                                    if($num==0){
                                        echo "No Data Available";
                                    }else{
                                        //$res = $result->fetch_assoc();
                                        $inc=0;
                                        while($res = mysqli_fetch_array($result)){
                                            ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $res['username']; ?></td>
                                                <td><?php echo $res['firstname']; ?></td>
                                                <td><?php echo $res['lastname']; ?></td>
                                                <td><?php echo role2fetch($conn,$res['rid']); ?></td>
                                                <td>
                                                    <a class="view1" data-id="<?php echo $res['id']; ?>"><i class="ri-eye-fill mr-2 text-primary"></i></a>
                                                    <a class="update1" id="update1" data-id="<?php echo $res['id']; ?>"><i class="ri-pencil-fill mr-2 text-primary"></i></a>
                                                    <a class="del" data-id="<?php echo $res['id']; ?>"><i class="ri-delete-bin-6-fill mr-2 text-danger"></i></a>
                                                </td>
                                            </tr>
                                            <?php
                                            $i++;
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
<div class="modal fade" id="viewmodal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">View</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="displaymsg"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>