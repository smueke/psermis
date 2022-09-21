<html>
   
   <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>School Result Management System</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/icheck/skins/flat/blue.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body class="">
        <div class="main-wrapper">

            <div class="login-bg-color bg-black-300">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel login-box">
                            <div class="panel-heading">
                                <div class="panel-title text-center">
                                    <h4>School Result Management System</h4>
                                </div>
                            </div>
                            <div class="panel-body p-20">
      <?php
         if(isset($_POST['delete'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $db='srms';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass,$db);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
                
            $ClassName = $_POST['ClassName'];
            
            $sql = "DELETE FROM tblclasses WHERE ClassName = $ClassName" ;
            mysql_select_db('srms');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not delete data: ' . mysql_error());
            }
            
            echo "Data deleted successfully\n";
            
            mysql_close($conn);
            
         }else {
            ?>
     <form method = "post" action = "<?php $_PHP_SELF ?>">
                                	
    <div class="form-group">
    <label for="default" class="col-sm-2 control-label">Class</label>
 <select name="class" class="form-control" id="default" required="required">
<option value="">Select Class</option>
<?php $sql = "SELECT * from tblclasses";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
{   ?>
<option value="<?php echo htmlentities($result->id); ?>"><?php echo htmlentities($result->ClassName); ?>&nbsp; Section-<?php echo htmlentities($result->Section); ?></option>
<?php }} ?>
 </select>
</div>
                <div class="form-group mt-20">
                                        <div class="">
                                      
                                            <input name = "delete" type = "submit" class="btn btn-primary" value = "Delete"><br>
        
                                        </div>
                                        </div>

                                       <div class="col-sm-6">
                                        <a href="dashboard.php">Back to Home</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
         }
      ?>
    </body>
</html>