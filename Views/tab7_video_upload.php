<!--Module - 1   -->
<div class="tab-pane fade content-page" id="video_module">
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
                                        <th className="col-2"> # </th>                                        											
                                        <th classname="col-8"> Video link (from Youtube) </th>
                                        <th classname="col-2"> Action </th>
                                    </tr>
                                </thead>									
                                <tfoot>
                                    <tr>
                                        <th className="col-2"> # </th>                                        											
                                        <th classname="col-8"> Video link (from Youtube) </th>
                                        <th classname="col-2"> Action </th>
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
                                            <td><?php echo $res[5]; ?></td>
                                            <td><?php echo $res[6]; ?></td>
                                            <td><a class="view" data-id=<?php echo $res[0];?>><i class="ri-eye-fill mr-2 text-primary"></i></a></td>
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