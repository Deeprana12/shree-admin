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
                    <form method="POST" action="../Database/uploads_img.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Upload Image below :</label>
                            <input name="image" type="file" class="form-control-file">
                        </div>                            
                        <button type="submit" name="upload" class="btn btn-primary">Upload</button>
                    </form>
                    <hr>
                    <div class="iq-search-bar">                                               
                        <input id="search_image_query" type="text" class="text search-input" placeholder="Type here to search...">                        
                    </div>
                    <div class="table-responsive" id="imageuploads">                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>