<?php
session_start();
include_once('includes/dbconnection.php');

    

  if(isset($_POST['save'])){
    
$conn = mysqli_connect("localhost","root","","fosdb") or die("Connection failed : " . mysqli_connect_error());

 
  $username= mysqli_real_escape_string($conn,$_POST["username"]);
  $details= mysqli_real_escape_string($conn,$_POST["details"]);

    $sql1 = "INSERT INTO review(username,details)
              VALUES('{$username}','{$details}')";
  
  $result2 = mysqli_query($conn,$sql1) or die("query unsuccessful.");

  mysqli_close($conn);
  }
   if(isset($_POST['save1'])){
    
$conn = mysqli_connect("localhost","root","","fosdb") or die("Connection failed : " . mysqli_connect_error());

 
  $username= mysqli_real_escape_string($conn,$_POST["username"]);
  $details= mysqli_real_escape_string($conn,$_POST["details"]);

    $sql1 = "INSERT INTO feedback(username,details)
              VALUES('{$username}','{$details}')";
  
  $result2 = mysqli_query($conn,$sql1) or die("query unsuccessful.");

  mysqli_close($conn);
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Food Ordering System | Your datails</title>
    <link rel="stylesheet" href="assets/css/icons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/red-color.css">
    <link rel="stylesheet" href="assets/css/yellow-color.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body itemscope>
<?php include_once('includes/header.php');?>

        <section>
            <div class="block">
                <div class="fixed-bg" style="background-image: url(assets/images/topbg.jpg);"></div>
                <div class="page-title-wrapper text-center">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="page-title-inner">
                            <h1 itemprop="headline">Customer Information</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="bread-crumbs-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php" title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item active">customer Information</li>
                </ol>
            </div>
        </div>

        <section>
            <div class="block top-padd30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="login-register-wrapper">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="sign-popup-wrapper brd-rd5">
                                            <div class="sign-popup-inner brd-rd5">
                                                <div class="sign-popup-title text-center">
                                                    <h4 itemprop="headline">Feedback</h4>
                                                </div>
                                
                                              <div class="sign-popup-title text-center">
                                                    <h5 itemprop="headline">Chat</h5>
                                                </div>
                                               <form class="sign-form" method="post" action="<?php $_SERVER['PHP_SELF']; ?>" autocomplete="off">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                                                            
                          <h2>name</h2>                                 
                        <input class="brd-rd3" type="text" onkeypress="return /[a-z/A-Z]/i.test(event.key)"   placeholder="Your detaill" name="username" required="true" maxlength="12">
                        <h2>details</h2>
                        <input class="brd-rd3" type="text" placeholder="Your detaill" name="details" required="true">
                                                        </div>
                                                     







 <?php if($_SESSION['fosuid']==""){?> 
  <a class="log-popup-btn btn  pull-right red-bg brd-rd3" href="#" title="Login">submit</a>
<?php } else {?>
    
 <div >
 <button  type="submit" class="red-bg brd-rd3" name="save1" value="Save1" required> Submit</button>
</div>
<?php } ?>
                                    
</div>




     <!-- <div >
    <button  type="submit" class="red-bg brd-rd3" name="save1" value="Save1" required> Submit</button>
</div> -->
                                                
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                          
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<section>
            <div class="block top-padd30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="login-register-wrapper">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="sign-popup-wrapper brd-rd5">
                                            <div class="sign-popup-inner brd-rd5">
                                                <div class="sign-popup-title text-center">
                                                    <h4 itemprop="headline">Review</h4>
                                                </div>
                                
                                              <div class="sign-popup-title text-center">
                                                    <h5 itemprop="headline">Chat</h5>
                                                </div>
                                                <form class="sign-form" method="post" action="<?php $_SERVER['PHP_SELF']; ?>" autocomplete="off">
                                                   
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                        <h2>name</h2>                                 
                        <input class="brd-rd3" type="text" onkeypress="return /[a-z/A-Z]/i.test(event.key)"   placeholder="Your detaill" name="username" required="true" maxlength="12">
                        <h2>details</h2>
                        <input class="brd-rd3" type="text" placeholder="Your detaill" name="details" required="true">
                                                        </div>
                                                     
                                                        <!-- <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12"> -->
                                                            <button class="red-bg brd-rd3" type="submit"  name="save" value="Save" required> Submit</button>
                                                        <!-- </div> -->
                                            
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                          
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

          <?php include_once('includes/footer.php');
include_once('includes/signin.php');
include_once('includes/signup.php');
      ?>
    </main><!-- Main Wrapper -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>	

</html>
