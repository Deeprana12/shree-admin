<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
        <div class="iq-sidebar-logo">
            <div class="top-logo">
                <a href="index.php" class="logo">
                    <img src="../Asserts/images/logo.gif" class="img-fluid" alt="">
                    <span>vito</span>
                </a>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="navbar-left">
                <h3 class="ml-3">Shree Cottages and Party plot</h3>                                
            </div>
            
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">                
            </div>
            
            <ul class="navbar-list">
                <li>
                    <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center bg-primary rounded">
                        <img src="../Asserts/images/user/1.jpg" class="img-fluid rounded mr-3" alt="user">
                        <div class="caption">
                            <h6 class="mb-0 line-height text-white"><?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname'] ?></h6>
                            <span class="font-size-12 text-white">Available</span>
                        </div>
                    </a>
                    <div class="iq-sub-dropdown iq-user-dropdown">
                        
                                <div class="d-inline-block w-100 text-center p-3">
                                    <form action="../Database/loginPostMethod.php" method="post">
                                        <button class="bg-primary iq-sign-btn" name="logout" type="submit" role="button">Sign out<i class="ri-login-box-line ml-2"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>
