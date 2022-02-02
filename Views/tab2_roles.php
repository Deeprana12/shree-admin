<div class="tab-pane fade content-page" id="roles">
    <div class="row">
        <div class="col">
            <div class="d-flex justify-content-end mb-2">
                <button type="button" id="modalabtn" name="modalabtn" class="btn btn-primary" data-toggle="modal" data-target="#modala">+ Add role</button>
            </div>

            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Admin Panel</h4>
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
                        <div class="result">
                            <form method="GET">
                                <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Roles</th>
                                        <th scope="col">Role Info</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        <?php
                                    $i=1;
                                    $result1 = rolefetch($conn);
                                    $num=mysqli_num_rows($result1);
                                    if($num==0){
                                        echo "No Data Available";
                                    }else{
                                        while($res = mysqli_fetch_array($result1)){
                                            ?>
                                            <tr>
                                                <td><?php echo $res['rid']; ?></td>
                                                <td><?php echo $res['role']; ?></td>
                                                <td><?php echo $res['roleinfo']; ?></td>
                                                <td> <a class="view" data-id="<?php echo $res['rid']; ?>"><i class="ri-eye-fill mr-2 text-primary"></i></a>
                                                    <a class="updaterole1" id="updaterole1" data-id="<?php echo $res['rid']; ?>"> <i class="ri-pencil-fill mr-2 text-primary"></i></a>
                                                    <a class="del1" data-id="<?php echo $res['rid']; ?>"><i class="ri-delete-bin-6-fill mr-2 text-danger"></i></a></td>
                                            </tr>
                                            <?php
                                            $i++;
                                        }
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>    
</div>