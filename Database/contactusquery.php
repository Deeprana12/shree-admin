<?php

    // set pagination limit here :
    $set_limit = 5;

    include_once('config.php');

    if(isset($_POST['search'])){

        $search_value = $_POST['search'];
        if($search_value){
            $sql = "SELECT * FROM tbl_contactusquery WHERE email LIKE '%{$search_value}%'";
            $result = mysqli_query($conn,$sql);
            $output = "";

            if(mysqli_num_rows($result) > 0){
                $output = '<table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
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
                                <tbody>';

                                    $i=1;
                                    
                                    while($res = mysqli_fetch_array($result)){                            
                                        $output .= "
                                        <tr>
                                            <td>{$i}</td>
                                            <td>{$res['1']}</td>
                                            <td>{$res['2']}</td>
                                            <td>{$res['3']}</td>
                                            <td>{$res['4']}</td>
                                            <td>{$res['6']}</td>
                                            <td><a class='viewMessage' data-id={$res[0]}><i class='ri-chat-2-fill text-primary'></i></a>
                                            &nbsp;<a class='deleteMsg' data-id={$res[0]}><i class='ri-delete-bin-6-fill mr-2 text-danger'></i></a></td> 
                                            </tr>";
                                        $i++;
                                    }                           
                                    
                                    // $sql_total = "SELECT * FROM tbl_contactusquery";
                                    // $records = mysqli_query($conn,$sql_total);
                                    // $total_records = mysqli_num_rows($records);
                                    // $total_pages = ceil($total_records/$limit_per_page);
                                    
                                    $output .= '</tbody>
                                    </table>';
                            echo $output;
            }else{
                echo "no records found";
            }
        }else{
            $limit_per_page = $set_limit;
            $page = "";

            if(isset($_POST['page_no'])){
                $page = $_POST['page_no'];
            }else{
                $page = 1;
            }

            $offset = ($page - 1) * $limit_per_page;


            $sql = "SELECT * FROM tbl_contactusquery LIMIT {$offset},{$limit_per_page}";
            $result = mysqli_query($conn,$sql);
            $output = "";

            if(mysqli_num_rows($result) > 0){
                $output = '<table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
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
                                <tbody>';

                                    $i=1;
                                    
                                    while($res = mysqli_fetch_array($result)){                            
                                        $output .= "
                                        <tr>
                                            <td>{$i}</td>
                                            <td>{$res['1']}</td>
                                            <td>{$res['2']}</td>
                                            <td>{$res['3']}</td>
                                            <td>{$res['4']}</td>
                                            <td>{$res['6']}</td>
                                            <td><a class='viewMessage' data-id={$res[0]}><i class='ri-chat-2-fill text-primary'></i></a>
                                            &nbsp;<a class='deleteMsg' data-id={$res[0]}><i class='ri-delete-bin-6-fill mr-2 text-danger'></i></a></td> 
                                            </tr>";
                                        $i++;
                                    }                           
                                    
                                    $sql_total = "SELECT * FROM tbl_contactusquery";
                                    $records = mysqli_query($conn,$sql_total);
                                    $total_records = mysqli_num_rows($records);
                                    $total_pages = ceil($total_records/$limit_per_page);
                                    
                                    $output .= '</tbody>
                                    </table>
                                    <div class="row justify-content-between mt-3">
                                        <div id="user-list-page-info" class="col-md-6">
                                            <span>Showing 5 of 5 entries</span>
                                        </div>
                                        <div class="col-md-6">
                                            
                                    <div id="contact_pagination">
                                        <ul class="pagination justify-content-end mb-0">';

                                for($i=1;$i<=$total_pages;$i++){
                                    if($i == $page){
                                        $class_name = "active";
                                    }else{
                                        $class_name = "";
                                    }
                                    $output .= "<li class='page-item {$class_name}'><a class='page-link' id='{$i}' href='#'>{$i}</a></li>";
                                }
                            $output .= ' </ul></div></div>
                            </div>';
                    ;
                    echo $output;
            }else{
                echo "no records found";
            }
        }
        

    }else{
        $limit_per_page = $set_limit;
        $page = "";

        if(isset($_POST['page_no'])){
            $page = $_POST['page_no'];
        }else{
            $page = 1;
        }

        $offset = ($page - 1) * $limit_per_page;


        $sql = "SELECT * FROM tbl_contactusquery LIMIT {$offset},{$limit_per_page}";
        $result = mysqli_query($conn,$sql);
        $output = "";

        if(mysqli_num_rows($result) > 0){
            $output = '<table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
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
                            <tbody>';

                                $i=1;
                                
                                while($res = mysqli_fetch_array($result)){                            
                                    $output .= "
                                    <tr>
                                        <td>{$i}</td>
                                        <td>{$res['1']}</td>
                                        <td>{$res['2']}</td>
                                        <td>{$res['3']}</td>
                                        <td>{$res['4']}</td>
                                        <td>{$res['6']}</td>
                                        <td><a class='viewMessage' data-id={$res[0]}><i class='ri-chat-2-fill text-primary'></i></a>
                                        &nbsp;<a class='deleteMsg' data-id={$res[0]}><i class='ri-delete-bin-6-fill mr-2 text-danger'></i></a></td> 
                                        </tr>";
                                    $i++;
                                }                           
                                
                                $sql_total = "SELECT * FROM tbl_contactusquery";
                                $records = mysqli_query($conn,$sql_total);
                                $total_records = mysqli_num_rows($records);
                                $total_pages = ceil($total_records/$limit_per_page);
                                
                                $output .= '</tbody>
                                </table>
                                <div class="row justify-content-between mt-3">
                                    <div id="user-list-page-info" class="col-md-6">
                                        <span>Showing 5 of 5 entries</span>
                                    </div>
                                    <div class="col-md-6">
                                        
                                <div id="contact_pagination">
                                    <ul class="pagination justify-content-end mb-0">';

                            for($i=1;$i<=$total_pages;$i++){
                                if($i == $page){
                                    $class_name = "active";
                                }else{
                                    $class_name = "";
                                }
                                $output .= "<li class='page-item {$class_name}'><a class='page-link' id='{$i}' href='#'>{$i}</a></li>";
                            }
                        $output .= ' </ul></div></div>
                        </div>';
                
                echo $output;
        }else{
            echo "no records found";
        }
    }    

    
?>