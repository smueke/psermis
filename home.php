
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home page</title>
        <link rel="shortcut icon" href="images/logo-3.png">
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/toastr/toastr.min.css" media="screen" >
        <link rel="stylesheet" href="css/icheck/skins/line/blue.css" >
        <link rel="stylesheet" href="css/icheck/skins/line/red.css" >
        <link rel="stylesheet" href="css/icheck/skins/line/green.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">
              <?php include('includes/topbar2.php');?>
            <div class="content-wrapper">
                <div class="content-container">

                    <?php include('includes/leftbar2.php');?>  

                    <div class="main-page">
                        
                        <div class="container-fluid">
                            
                            <div class="row page-title-div">
                                <div class="col-sm-14">

                                <marquee width="100%" direction="left" height="30%">
                                 <strong><font color="#0066ff">Education is the epitome of excellence.....</font></strong>
                                    </marquee>
                                    <hr style="height:2px; border:none; color:#000; background-color:#4d9900;">

                                </div>
                                <!-- /.col-sm-6 -->
                            </div>
                            <!-- /.row -->
    
	                        <section class="section">
                            <div class="container-fluid">
                            <div class="row">
                            </div>	

	                   <img src="images/3.jpg" alt="Logo" style="max-width:100%;height:auto;">
                    <!-- /.main-page -->
                            </div>
                            <hr style="height:2px; border:none; color:#000; background-color:#ffcc00;">
                             </section>   <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                       <p class="text-muted text-center"><small>Copyright © psermis 2019.All Rights Reserved.</small></p> <p class="text-muted text-center"><small>Designed by: Stephen Mueke.</small></p>
                       
                    
                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->
</div>
        </div>
        <!-- /.main-wrapper -->

         <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/icheck/icheck.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function(){
                $('input.flat-blue-style').iCheck({
                    checkboxClass: 'icheckbox_flat-blue'
                });
            });
        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html> 