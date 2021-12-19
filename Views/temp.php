<?php
include_once "../Database/adminbackend.php";
session_start();
if(!isset($_SESSION['username'])){
    header("Location: ../index.php");
}
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
                        <a href="#module1" class="iq-waves-effect nav-link" data-toggle="tab" aria-selected="false" id="li4a"><i class="ri-home-8-line"></i><span>Module - 1</span></a>
                    </li>
                <?php }
                $per = fetchrole1($conn,$_SESSION['rid']);
                $s = $per['permisions'];
                if(str_contains($s,'m2')){
                    ?>
                    <li class="nav-item" id="li5">
                        <a href="#module2" class="iq-waves-effect nav-link" data-toggle="tab" aria-selected="false" id="li5a"><i class="ri-home-8-line"></i><span>Module - 2</span></a>
                    </li>
                <?php }?>
            </ul>
        </nav>
        <div class="p-3"></div>
    </div>
</div>

<!--sidebar content-->
<div class="tab-content container-fluid">

    <div class="tab-pane fade show active content-page" id="dashboard">
        <div class="row">
           
            <div class="col-md-6 col-lg-3">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height" id="tbookings">
                <a href="#users" class="iq-waves-effect nav-link" data-toggle="tab" aria-selected="false" id="li2a"><div class="iq-card-body">
                        <div class="text"><h5><span>Total bookings</span><h5></div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="value-box">
                                    <h2 class="mb-0"><span class="counter"><b>80</b></span></h2>                                
                                </div>
                                <div class="iq-iconbox iq-bg-primary">
                                    <i class="ri-arrow-right-line"></i>
                                </div>
                            </div>
                            <div class="iq-progress-bar mt-5">
                                <span class="bg-primary" data-percent="66"></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-body">                    
                        <a href="#"><div class="text"><h5><span>Total queries</span><h5></div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="value-box">
                                    <h2 class="mb-0"><span class="counter"><b>80</b></span></h2>                                
                                </div>
                                <div class="iq-iconbox iq-bg-success">
                                    <i class="ri-arrow-right-line"></i>
                                </div>
                            </div>
                            <div class="iq-progress-bar mt-5">
                                <span class="bg-success" data-percent="66"></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="tab-pane fade content-page" id="users">
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
                                    <!--<a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>-->
                                    <!--<a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>-->
                                    <!--<a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>-->
                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="table-responsive">
                            <table class="table mb-0 ">
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

                                $result=alluser($conn);

                                $num=mysqli_num_rows($result);
                                if($num==0){
                                    echo "No Data Available";
                                }else{
                                    //$res = $result->fetch_assoc();
                                    $inc=0;
                                    while($res = mysqli_fetch_array($result)){
                                        ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $res['username']; ?></td>
                                            <td><?php echo $res['firstname']; ?></td>
                                            <td><?php echo $res['lastname']; ?></td>
                                            <td><?php echo role2fetch($conn,$res['rid']); ?></td>
                                            <td>
                                                <a class="update1" id="update1" data-id="<?php echo $res['id']; ?>"><i class="ri-pencil-fill mr-2 text-primary"></i></a>
                                                <a class="del" data-id="<?php echo $res['id']; ?>"><i class="ri-delete-bin-6-fill mr-2 text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <?php
                                        $i++;
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
                                    <table class='table'>
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
                                                    <td><a class="updaterole1" id="updaterole1" data-id="<?php echo $res['rid']; ?>"> <i class="ri-pencil-fill mr-2 text-primary"></i></a>
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

    <div class="tab-pane fade content-page" id="updateUser">
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
                                    <!--<a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>-->
                                    <!--<a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>-->
                                    <!--<a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>-->
                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="table-responsive">
                            <table class="table mb-0 ">
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
                                            <td><?php echo $res['rid']; ?></td>
                                            <td><a class="update1" id="update1" data-id="<?php echo $res['rid']; ?>"><i class="ri-pencil-fill mr-2 text-primary"></i></a>
                                                <a class="del" data-id="<?php echo $res['rid']; ?>"><i class="ri-delete-bin-6-fill mr-2 text-danger"></i></a></td>
                                        </tr>
                                        <?php
                                        $i++;
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

    <div class="tab-pane fade content-page" id="deleteUser">
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
                                    <!--<a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>-->
                                    <!--<a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>-->
                                    <!--<a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>-->
                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="table-responsive">
                            <table class="table mb-0 ">
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
                                            <td><?php echo $res['rid']; ?></td>
                                            <td><a class="update1" id="update1" data-id="<?php echo $res['rid']; ?>"><i class="ri-pencil-fill mr-2 text-primary"></i></a>
                                                <a class="del" data-id="<?php echo $res['rid']; ?>"><i class="ri-delete-bin-6-fill mr-2 text-danger"></i></a></td>
                                        </tr>
                                        <?php
                                        $i++;
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

<!-- TOP Nav Bar -->
<?php
include_once 'Navbar.php';
?>
<!-- TOP Nav Bar END -->

<!--right side bar-->

<!--Add role-->
<!-- update Modal -->
<div class="modal fade" id="updatetable" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">UPDATE</h5>
                <button type="button" id="cancel-btn" class="btn border border-0" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times fa-2x" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body" id="info_update">
                <div class="container-fluid">
                    <form action="" class="needs-validation" method="POST" >

                        <div class="row g-2">
                            <div class="col-md-6 mb-3">
                                <label for="firstname" class="form-label">First name : </label>
                                <input type="text" class="form-control" name="fname" id="u-fname" required>
                                <div class="invalid-feedback">
                                    Please enter a firstname!
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label f    or="lastname" class="form-label">Last Name : </label>
                                <input type="text" class="form-control" name="lname" id="u-lname" required>
                                <div class="invalid-feedback">
                                    Please enter a lastname!
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
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
                                    Please enter a username!
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="done1" class="btn btn-primary">update</button>
            </div>
            </form>
        </div>
    </div>
</div>

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
                <div class="row">
                    <div class="col">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                            <div class="container">
                                <div class="form-row">
                                    <div class="col">
                                        <input type="text" id="rolename" class="form-control" placeholder="Role" required>
                                    </div>
                                    <div class="col">
                                        <input type="text" id="roled" class="form-control" placeholder="Role Description" required>
                                    </div>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <div class="table-responsive">
                                    <div class="result">
                                        <form method="GET">
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
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="newr(1)">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade updaterole" id="updaterole" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">ADD ROLE</h3>
                <button type="button" class="close" data-dismiss="dul1dal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">

                            <div class="container">
                                <div class="form-row">
                                    <div class="col">
                                        <input type="text" id="rolename1" class="form-control" placeholder="Role" required>
                                    </div>
                                    <div class="col">
                                        <input type="text" id="roleinfo" class="form-control" placeholder="Role Description" required>
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
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="savepermission">Save</button>
            </div>
        </div>
    </div>
</div>

<!--Module - 1   -->
<div class="tab-pane fade content-page" id="module1">
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
                            <table class="table mb-0">
                            <thead>
											<tr>
												<th>#</th>
												<th>Name</th>
												<th>email</th>
												<th>phone</th>
												<th>eventname</th>
												<th>time</th>
												<th>booking</th>
												<th>FromDate</th>
												<th>ToDate</th>
												<th>Posting date</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>									
										<tfoot>
											<tr>
												<th>#</th>
												<th>Name</th>
												<th>email</th>
												<th>phone</th>
												<th>eventname</th>
												<th>time</th>
												<th>booking</th>
												<th>From Date</th>
												<th>Posting date</th>
												<th>To Date</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</tfoot>
										<!-- Table Body -->
										<tbody>
                                <?php
                                $i=1;
                                $inc=1;
                                $result=allusers($conn);
                                $num=mysqli_num_rows($result);
                                if($num==0){
                                    echo "No Data Available";
                                }else{
                                    //$res = $result->fetch_assoc();

                                    while($res = mysqli_fetch_array($result)){
                                        ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $res['name']; ?></td>
                                            <td><?php echo $res['userEmail']; ?></td>
                                            <td><?php echo $res['phone']; ?></td>
                                            <td><?php echo $res['event']; ?></td>
                                            <td><?php echo $res['time']; ?></td>
                                            <td><?php echo $res['booking']; ?></td>
                                            <td><?php echo $res['FromDate']; ?></td>
                                            <td><?php echo $res['PostingDate']; ?></td>
                                            <td><?php echo $res['ToDate']; ?></td>                                            
                                            <td>
                                                <?php 
                                                    if($res['Status']==0)
                                                    {
                                                    echo 'Not Confirmed yet';
                                                    } else if ($res['Status']==1) {
                                                    echo 'Confirmed';
                                                    }
                                                    else{
                                                        echo 'Cancelled';
                                                    }
                                                ?>
											</td>
                                            <td></td>
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
                            <table class="table mb-0 ">
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
                                                if(str_contains($s,'m2-0')){?>
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



<!-- Footer -->
<?php   
include("Footer.php");
?>
<!-- Footer END -->
</body>

</html>  

