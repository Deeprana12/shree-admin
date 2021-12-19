<!--Module - 2    -->
    <div class="tab-pane fade content-page" id="module2">
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
                            <table class="table mb-0 table-borderless">
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
                                $inc=1;
                                $result=alluser($conn);

                                $num=mysqli_num_rows($result);
                                if($num==0){
                                    echo "No Data Available";
                                }else{
                                    //$res = $result->fetch_assoc();

                                    while($res = mysqli_fetch_array($result)){
                                        ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $res['username']; ?></td>
                                            <td><?php echo $res['firstname']; ?></td>
                                            <td><?php echo $res['lastname']; ?></td>
                                            <td><?php echo role2fetch($conn,$res['rid']); ?></td>
                                            <td>
                                                <?php
                                                $per = fetchrole1($conn,$_SESSION['rid']);
                                                $s = $per['permisions'];
                                                if(str_contains($s,'m2-1')){?>
                                                    <a class="view" data-id="<?php echo $res['id']; ?>"><i class="ri-eye-fill mr-2 text-primary"></i></a>
                                                <?php } if(str_contains($s,'m2-0')){?>
                                                    <a class="update1" id="update1" data-id="<?php echo $res['id']; ?>"><i class="ri-pencil-fill mr-2 text-primary"></i></a>
                                                <?php } if(str_contains($s,'m2-2')){?>
                                                <a class="del" data-id="<?php echo $res['id']; ?>"><i class="ri-delete-bin-6-fill mr-2 text-danger"></i></a>
                                            </td>
                                            <?php } ?>
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