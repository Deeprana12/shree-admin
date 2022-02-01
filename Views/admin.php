<?php
include_once "../Database/adminbackend.php";
session_start();
if(!isset($_SESSION['username'])){
    header("Location: ../index.php");
}
include_once '../Database/uploads_img.php'; 
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Vito - Admin Dashboard Template</title>
    <?php include_once 'Header.php' ?>
</head>

<body class="sidebar-main right-column-fixed header-top-bgcolor">

<!-- Sidebar  -->
<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
        <a href="admin.php">
            <img src="../Asserts/images/logo.gif" class="img-fluid" alt="">
            <span>Vito</span>
        </a>
        <div class="iq-menu-bt-sidebar">
            <div class="iq-menu-bt align-self-center">
                <div class="wrapper-menu">
                    <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
                    <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div id="sidebar-scrollbar">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu nav nav-tabs nav-fill">
                <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Dashboard</span></li>
                <li class="nav-item active" id="li1">
                    <a href="#dashboard" class="iq-waves-effect nav-link" data-toggle="tab" aria-selected="true" id="li1a"><i class="ri-home-4-line"></i><span>Dashboard</span></a>
                </li>
                <?php
                if($_SESSION['rid']=='1'){
                    ?>
                    <li class="nav-item" id="li3">
                        <a href="#roles" class="iq-waves-effect nav-link" data-toggle="tab" aria-selected="false" id="li3a"><i class="ri-home-8-line"></i><span>Admin Panel</span></a>
                    </li>
                    <li class="nav-item" id="li2">
                        <a href="#users" class="iq-waves-effect nav-link" data-toggle="tab" aria-selected="false" id="li2a"><i class="ri-user-3-line"></i><span>Active User</span></a>
                    </li>
                <?php } ?>
                <?php
                if (!function_exists('str_contains')) {
                    function str_contains(string $haystack, string $needle): bool
                    {
                        return '' === $needle || false !== strpos($haystack, $needle);
                    }
                }
                $per = fetchrole1($conn,$_SESSION['rid']);
                $s = $per['permisions'];
                if(str_contains($s,'m1')){
                    ?>
                    <li class="nav-item" id="li4">
                        <a href="#module1" class="iq-waves-effect nav-link" data-toggle="tab" aria-selected="false" id="li4a"><i class="ri-home-8-line"></i><span>Contact-us queries</span></a>
                    </li>
                <?php }
                $per = fetchrole1($conn,$_SESSION['rid']);
                $s = $per['permisions'];
                if(str_contains($s,'m2')){
                    ?>
                    <li class="nav-item" id="li5">
                        <a href="#module2" class="iq-waves-effect nav-link" data-toggle="tab" aria-selected="false" id="li5a"><i class="ri-home-8-line"></i><span>Images module</span></a>
                    </li>
                    <li class="nav-item" id="li6">
                        <a href="#video_module" class="iq-waves-effect nav-link" data-toggle="tab" aria-selected="false" id="li6a"><i class="ri-home-8-line"></i><span>Videos module</span></a>
                    </li>
                <?php }?>
            </ul>
        </nav>
        <div class="p-3"></div>
    </div>
</div>

<!--sidebar content-->

<div class="tab-content container-fluid">

    <?php include('tab1_dashboard.php') ?>
    <?php include('tab2_roles.php') ?>
    <?php include('tab3_active_members.php') ?>
    <?php include('tab4_image_upload.php') ?>    
    <?php include('tab6_contactus_query.php') ?>    
    <?php include('tab7_video_upload.php') ?>

</div>
<!-- TOP Nav Bar -->
<?php
include_once 'Navbar.php';
?>
<!-- TOP Nav Bar END -->

    <!-- update Modal -->
<div class="modal fade" id="updatetable" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">UPDATE</h5>
                <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="info_update">
                <div class="container-fluid">
                    <form action="" class="validate" method="POST" >
                        <div class="row g-2">
                            <div class="col-md-6 mb-3 name">
                                <label for="firstname" class="form-label">First name : </label>
                                <input type="text" class="form-control" name="fname" id="u-fname" required>
                                <div class="invalid-feedback">
                                    Please enter a firstname!
                                </div>
                            </div>

                            <div class="col-md-6 mb-3 name">
                                <label for="lastname" class="form-label">Last Name : </label>
                                <input type="text" class="form-control" name="lname" id="u-lname" required>
                                <div class="invalid-feedback">
                                    Please enter a lastname!
                                </div>
                            </div>

                            <div class="col-md-12 mb-3 name">
                                <label for="username" class="form-label">Username : </label>
                                <input type="text" class="form-control" name="user" id="u-user" required>
                                <div class="invalid-feedback">
                                    Please enter a username!
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="username" class="form-label">Roles : </label>
                                <select class="form-control" name="roles" id="u-role">
                                    <option selected value="" disabled>Select Roles</option>
                                    <?php
                                    $result1=rolefetch($conn);
                                    while ($res1=mysqli_fetch_array($result1)){
                                    ?>
                                        <option value="<?php echo $res1['rid']; ?>"><?php echo $res1['role']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                                <div class="invalid-feedback">
                                    Please select role!
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="done1" class="btn btn-primary">update</button>
            </div>
        </div>
    </div>
</div>

    <!--Add role Modal-->
<div class="modal fade bd-example-modal-xl" id="modala" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">ADD ROLE</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="GET" class="validate" id="newrole">
                <div class="row">
                    <div class="col">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                            <div class="container">

                                    <div class="form-row">
                                        <div class="col name">
                                            <input type="text" id="rolename" class="form-control" placeholder="Role" required>
                                            <div class="invalid-feedback">
                                                Please enter a rolename!
                                            </div>
                                        </div>
                                        <div class="col name">
                                            <input type="text" id="roled" class="form-control" placeholder="Role Description" required>
                                            <div class="invalid-feedback">
                                                Please enter a role detail!
                                            </div>
                                        </div>
                                    </div>

                            </div>
                            <div class="iq-card-body">
                                <div class="table-responsive">
                                    <div class="result">
                                            <table class='table'>
                                                <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Modules</th>
                                                    <th scope="col">Update</th>
                                                    <th scope="col">View</th>
                                                    <th scope="col">Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                <?php
                                                $i=1;
                                                ?>
                                                <tr>
                                                    <td><?php echo $i++; ?></td>
                                                    <td><?php echo "Module-1"; ?></td>
                                                    <td><input type="checkbox" class="get_roles11" value="0"></td>
                                                    <td><input type="checkbox" class="get_roles11" value="1"></td>
                                                    <td><input type="checkbox" class="get_roles11" value="2"></td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $i++; ?></td>
                                                    <td><?php echo "Module-2"; ?></td>
                                                    <td><input type="checkbox" class="get_roles22" value="0"></td>
                                                    <td><input type="checkbox" class="get_roles22" value="1"></td>
                                                    <td><input type="checkbox" class="get_roles22" value="2"></td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $i++; ?></td>
                                                    <td><?php echo "Module-3"; ?></td>
                                                    <td><input type="checkbox" class="get_roles33" value="0"></td>
                                                    <td><input type="checkbox" class="get_roles33" value="1"></td>
                                                    <td><input type="checkbox" class="get_roles33" value="2"></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" id="submit" class="btn btn-primary" onclick="newr(1)">Save changes</button>
            </div>
        </div>
    </div>
</div>

    <!-- update role Modal-->
<div class="modal fade updaterole" id="updaterole" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">UPDATE ROLE</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="validate">
                <div class="row">

                      <div class="col">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">

                            <div class="container">
                                <div class="form-row">
                                    <div class="col name">
                                        <input type="text" id="rolename1" class="form-control" placeholder="Role" required>
                                        <div class="invalid-feedback">
                                            Please enter a rolename!
                                        </div>
                                    </div>
                                    <div class="col name">
                                        <input type="text" id="roleinfo" class="form-control" placeholder="Role Description" required>
                                        <div class="invalid-feedback">
                                            Please enter a role detail!
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <div class="table-responsive">
                                    <div class="result">
                                        <form method="GET" id="pform">
                                            <table class='table'>
                                                <thead>
                                                <tr>
                                                    <th scope="col">Module</th>
                                                    <th scope="col">Update</th>
                                                    <th scope="col">View</th>
                                                    <th scope="col">Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td><?php echo "Module-1"; ?></td>
                                                    <td><input type="checkbox" id="m1-u" name="h" class="get_permission" value="m1-0" ></td>
                                                    <td><input type="checkbox" id="m1-v" name="h" class="get_permission" value="m1-1" ></td>
                                                    <td><input type="checkbox" id="m1-d" name="h" class="get_permission" value="m1-2" ></td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo "Module-2"; ?></td>
                                                    <td><input type="checkbox" id="m2-u" name="h" class="get_permission" value="m2-0" ></td>
                                                    <td><input type="checkbox" id="m2-v" name="h" class="get_permission" value="m2-1" ></td>
                                                    <td><input type="checkbox" id="m2-d" name="h" class="get_permission" value="m2-2" ></td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo "Module-3"; ?></td>
                                                    <td><input type="checkbox" id="m3-u" name="h" class="get_permission" value="m3-0" ></td>
                                                    <td><input type="checkbox" id="m3-v" name="h" class="get_permission" value="m3-1" ></td>
                                                    <td><input type="checkbox" id="m3-d" name="h" class="get_permission" value="m3-2" ></td>
                                                </tr>
                                                </tbody>

                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                  </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="savepermission">Save</button>
            </div>
        </div>
    </div>
</div>

    <!--admin panel Modal -->
<div class="modal fade" id="view-admin" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">View</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row mb-2">
                            <div class="col-3">
                                <h5><b>Role:</b></h5>
                            </div>
                            <div class="col">
                                <h5 id="v-role1"></h5>
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col-3">
                                <h5><b>Role Info:</b></h5>
                            </div>
                            <div class="col">
                                <h5 id="v-roleinfo"></h5>
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col-3">
                                <h5><b>Permission:</b></h5>
                            </div>
                            <div class="col">
                                <h5 id="v-permission"></h5>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



</div>

    <!-- User Booking modal -->
<div class="modal fade" id="view-userbook" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Data of id : <span id="spid">  </span> </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row mb-2">
                            <div class="col-3">
                                <h5><b>Name : </b></h5>
                            </div>
                            <div class="col">
                                <h5 id="username"></h5>
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col-3">
                                <h5><b>Email : </b></h5>
                            </div>
                            <div class="col">
                                <h5 id="useremail"></h5>
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col-3">
                                <h5><b>Ph no : </b></h5>
                            </div>
                            <div class="col">
                                <h5 id="userphno"></h5>
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col-3">
                                <h5><b>Event : </b></h5>
                            </div>
                            <div class="col">
                                <h5 id="userevent"></h5>
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col-3">
                                <h5><b>Time : </b></h5>
                            </div>
                            <div class="col">
                                <h5 id="usertime"></h5>
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col-3">
                                <h5><b>Booking : </b></h5>
                            </div>
                            <div class="col">
                                <h5 id="userbooking"></h5>
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col-3">
                                <h5><b>From date : </b></h5>
                            </div>
                            <div class="col">
                                <h5 id="userfromdate"></h5>
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col-3">
                                <h5><b>To date : </b></h5>
                            </div>
                            <div class="col">
                                <h5 id="usertodate"></h5>
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col-3">
                                <h5><b>Stauts : </b></h5>
                            </div>
                            <div class="col">
                                <h5 id="userstatus"></h5>
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col-3">
                                <h5><b>Posting date:</b></h5>
                            </div>
                            <div class="col">
                                <h5 id="userpostingdate"></h5>
                            </div>
                        </div>
                        
                    </form>
                </div>
                <div class="modal-footer">                    
                    <button id="fetchDataforUpdate" type="button" class="btn btn-secondary" data-id="x">Edit</button>
                    <button type="button" class="btn btn-secondary closebtn" id="clst" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



</div>

<div class="modal fade" id="view-perticuler" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Data of id : <span id="spid">  </span> </h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="iq-card">
                    <div class="iq-card-body">
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Name</span>
                                        <input class="form-control" id="uname" name="uname" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Email</span>
                                        <input class="form-control" id="uemail" name="email" placeholder="Enter your email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="form-label">Phone</span>
                                <input class="form-control" id="uph" name="Phone" placeholder="Enter your phone number">
                            </div>
                            <div class="form-group">
                                <span class="form-label">Eventname</span>
                                <select class="form-control" id="uevent" name="Eventname" placeholder="Enter eventname">
                                <option value="select">select</option>
                                <option value="BirthDay Party">BirthDay Party</option>
                                <option value="Corporate Events">Corporate Events</option>
                                <option value="Event Management">Event Management</option>
                                <option value="Wedding Ceremony">Wedding Ceremony</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <span class="form-label">Time</span>
                                <select class="form-control" id="utime" name="Time" placeholder="Enter eventname">
                                <option value="select">select</option>
                                <option value="Morning">Morning</option>
                                <option value="AfterNoon">AfterNoon</option>
                                <option value="Evening">Evening</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <span class="form-label">Booking For</span>
                                <select class="form-control" id="ubook" name="Booking" placeholder="Enter eventname">
                                <option value="select">select</option>
                                <option value="Rooms">Rooms</option>
                                <option value="Hall">Hall</option>
                                <option value="Shree party plot lawns">Shree party plot lawns</option>
                                <option value="Rooms+Hall+party plot lawns">Rooms+Hall+party plot lawns</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">From Date</span>
                                        <input class="form-control" id="ufdt" name="FromDate" type="date" required="">
                                    </div>
                                </div>                                                                        
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label"> To Date</span>
                                        <input class="form-control" id="utdt" name="ToDate" type="date" required="">
                                    </div>
                                </div>
                            </div> 
                            <div class="form-group">
                                <span class="form-label">Status</span>
                                <input class="form-control" id="ustatus" name="ustatus" placeholder="Enter your phone number">
                            </div>                                       																	                                
                        </form>
                    </div>               
                </div>
            </div>
            <div class="modal-footer">
                <button id="nowchange" type="button" class="btn btn-secondary" data-id="x">Save</button>
                <button type="button" class="btn btn-secondary closebtn" id="clst" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade updaterole" id="updateuserbook" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">UPDATE USER</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="validate">
                <div class="row">

                      <div class="col">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">

                            <div class="container">
                                <div class="form-row">
                                    <div class="col name">
                                        <input type="text" id="rolename1" class="form-control" placeholder="Role" required>
                                        <div class="invalid-feedback">
                                            Please enter a rolename!
                                        </div>
                                    </div>
                                    <div class="col name">
                                        <input type="text" id="roleinfo" class="form-control" placeholder="Role Description" required>
                                        <div class="invalid-feedback">
                                            Please enter a role detail!
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <div class="table-responsive">
                                    <div class="result">
                                        <form method="GET" id="pform">
                                            <table class='table'>
                                                <thead>
                                                <tr>
                                                    <th scope="col">Module</th>
                                                    <th scope="col">Update</th>
                                                    <th scope="col">View</th>
                                                    <th scope="col">Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td><?php echo "Module-1"; ?></td>
                                                    <td><input type="checkbox" id="m1-u" name="h" class="get_permission" value="m1-0" ></td>
                                                    <td><input type="checkbox" id="m1-v" name="h" class="get_permission" value="m1-1" ></td>
                                                    <td><input type="checkbox" id="m1-d" name="h" class="get_permission" value="m1-2" ></td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo "Module-2"; ?></td>
                                                    <td><input type="checkbox" id="m2-u" name="h" class="get_permission" value="m2-0" ></td>
                                                    <td><input type="checkbox" id="m2-v" name="h" class="get_permission" value="m2-1" ></td>
                                                    <td><input type="checkbox" id="m2-d" name="h" class="get_permission" value="m2-2" ></td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo "Module-3"; ?></td>
                                                    <td><input type="checkbox" id="m3-u" name="h" class="get_permission" value="m3-0" ></td>
                                                    <td><input type="checkbox" id="m3-v" name="h" class="get_permission" value="m3-1" ></td>
                                                    <td><input type="checkbox" id="m3-d" name="h" class="get_permission" value="m3-2" ></td>
                                                </tr>
                                                </tbody>

                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                  </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="savepermission">Save</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade change_des" id="change_des" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Small</label>
                    <select class="form-control form-control-sm mb-3" id="finaldes">
                        <option selected="">Select</option>                        
                        <option value="-1">Yet to decide</option>
                        <option value="0">Accept</option>
                        <option value="1">Reject</option>                        
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="fdes" type="button" class="btn btn-primary" data-id="">Done</button>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php
include_once ('Footer.php');
?>
<!-- Footer END -->
</body>

</html>

