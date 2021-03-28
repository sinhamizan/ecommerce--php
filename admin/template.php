
<?php 
include("class/admin-login.php");

session_start();
$admin_email = $_SESSION['admin_email'];

// when user not login, then user will go login page 
if($_SESSION['admin_id'] == null){
    header('location:index.php');
}

// logout
if(isset($_GET['adminLogout'])){
    $obj_adminlogin = new adminLogin();
    $obj_adminlogin->admin_logout();
    header('location:index.php');
}


?>


<?php include("inc/header.php") ?>
<body>
	  <div class="fixed-button">
		<a href="https://codedthemes.com/item/gradient-able-admin-template" target="_blank" class="btn btn-md btn-primary">
			<i class="fa fa-shopping-cart" aria-hidden="true"></i> Upgrade To Pro
		</a>
	  </div>
       <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <?php include("inc/main-menu.php"); ?>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    <?php include("inc/right-sidebar.php"); ?>
                    
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">

                                            <?php  
                                            
                                                if($views == "dashboard"){
                                                    include("views/dashboard-view.php");
                                                }
                                                elseif($views == "add-category"){
                                                    include("views/add-category-view.php");
                                                }
                                                elseif($views == "manage-category"){
                                                    include("views/manage-category-view.php");
                                                }
                                                elseif($views == "add-product"){
                                                    include("views/add-product-view.php");
                                                }
                                                elseif($views == "manage-product"){
                                                    include("views/manage-prodcut-view.php");
                                                }
                                                elseif($views == "manage-user"){
                                                    include("views/manage-user-view.php");
                                                }
                                            
                                            ?>

                                    </div>

                                    <div id="styleSelector">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php include("inc/footer.php") ?>