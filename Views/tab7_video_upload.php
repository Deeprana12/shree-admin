<!--Module - 1   -->
<div class="tab-pane fade content-page" id="video_module">
        <div class="row">
        <div class="col">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Videos modules</h4>
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
                        <form>
                            <div class="form-group">
                                    <label for="email">Video Name:</label>
                                    <input type="text" class="form-control" id="video_name">
                                </div>
                                
                                <div class="form-group">
                                    <label for="email">Video Description:</label>
                                    <input type="text" class="form-control" id="video_desc">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Video link (from Youtube)</label>
                                    <textarea class="form-control" id="video_link" rows="3"></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary" onclick="uploadVideo()">Upload</button>

                        </form>
                        
                        
                        <div class="iq-search-bar mt-5">                                               
                            <input id="search_video_query" type="text" class="text search-input" placeholder="Type here to search...">                        
                        </div>
                        <div class="table-responsive" id="videouploads">                            
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>