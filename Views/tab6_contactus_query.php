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
                    <div class="iq-search-bar">                                               
                        <input id="search_contact_query" type="text" class="text search-input" placeholder="Type here to search...">                        
                    </div>
                    <div class="table-responsive" id="contctusqueries">
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
                <button type="button" class="btn btn-primary" onclick="openMailbox()">Reply with Gmail</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Mail sending modal -->
<div class="modal fade" id="mailtxt" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Type a message : </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">                    
                    <textarea class="form-control" id="orgmailtxt" rows="3">Thank you for reaching out to Shree Cottages!    </textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="sendMail()">Send</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>