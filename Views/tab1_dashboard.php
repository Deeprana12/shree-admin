<!-- Dashboard -->
<div class="tab-pane fade show active content-page" id="dashboard">
    <div class="row">           
        <div class="col-md-6 col-lg-3">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height" id="contactq">
            <a href="#module1" class="iq-waves-effect nav-link" data-toggle="tab" aria-selected="false" id="li2a"><div class="iq-card-body">
                    <div class="text"><h5><span>Total Contact Us queries</span><h5></div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="value-box">
                                <h2 class="mb-0"><span class="counter"><b><?php $result=totalqueries($conn);$num=mysqli_num_rows($result);echo $num; ?></b></span></h2>                                
                            </div>
                            <div class="iq-iconbox iq-bg-primary">
                                <i class="ri-arrow-right-line"></i>
                            </div>
                        </div>
                        <div class="iq-progress-bar mt-5">
                            <span class="bg-primary" data-percent="<?php echo $num ?>"></span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        
        
        <div class="col-md-6 col-lg-3">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height" id="imageq">
            <a href="#module2" class="iq-waves-effect nav-link" data-toggle="tab" aria-selected="false" id="li2a"><div class="iq-card-body">
                    <div class="text"><h5><span>Total Images</span><h5></div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="value-box">
                            <h2 class="mb-0"><span class="counter"><b><?php $result=totalimages($conn);$num=mysqli_num_rows($result);echo $num; ?></b></span></h2>
                            </div>
                            <div class="iq-iconbox iq-bg-success">
                                <i class="ri-arrow-right-line"></i>
                            </div>
                        </div>
                        <div class="iq-progress-bar mt-5">
                            <span class="bg-success" data-percent="<?php echo $num ?>"></span>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        
        <div class="col-md-6 col-lg-3">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height" id="videoq">
            <a href="#video_module" class="iq-waves-effect nav-link" data-toggle="tab" aria-selected="false" id="li2a"><div class="iq-card-body">
                    <div class="text"><h5><span>Total Videos</span><h5></div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="value-box">
                            <h2 class="mb-0"><span class="counter"><b><?php $result=totalvideos($conn);$num=mysqli_num_rows($result);echo $num; ?></b></span></h2> 
                            </div>
                            <div class="iq-iconbox iq-bg-info">
                                <i class="ri-arrow-right-line"></i>
                            </div>
                        </div>
                        <div class="iq-progress-bar mt-5">
                            <span class="bg-info" data-percent="<?php echo $num ?>"></span>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div>
</div>