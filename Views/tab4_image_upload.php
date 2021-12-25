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
                        <form method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Upload Image below :</label>
                                <input name="image" type="file" class="form-control-file">
                            </div>                            
                            <button type="submit" name="upload" class="btn btn-primary">Upload</button>
                        </form>
                        <hr>
                        <div class="table-responsive">
                        <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Action</th>                                    
                                </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $result = mysqli_query($conn, "SELECT * FROM shreeimages");
                                        while ($row = mysqli_fetch_assoc($result)) {?>
                                            <tr>
                                                <td class="col-2">
                                                    <?php echo $i++; ?>
                                                </td>
                                                <td class="col-10" style="text-align:center">
                                                    <?php                                                
                                                    echo "<img height='200' width='200' src='../Asserts/images/".$row['image']."' >";                                                
                                                    ?>
                                                </td>
                                                <td>
                                                <a id="deleteImg" data-id='<?php echo $row["id"]; ?>'><i class="ri-delete-bin-6-fill mr-2 text-danger"></i></a>
                                                
                                                </td>
                                            </tr>       
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>