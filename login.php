<?php

    include 'dbmanage.php';
        
    if($_POST)
    {
        $emailaddress = $_POST['emailaddress'];
        $password = $_POST['password'];
        
        $ret = login($emailaddress, $password);
        $msg = $ret['Message'];
        if($ret['Status']==1)
        {
            $_SESSION['Login_ID']=$ret['Login_ID'];
            $_SESSION['Role']=$ret['Role'];

            if($ret['Role']==1)
            {
                header("Location: portal/dashboard.php");
            }
            else if($ret['Role']==2)
            {
                header("Location: portal2/dashboard.php");
            }
            else if($ret['Role']==3)
            {
                header("Location: portal3/dashboard.php");
            }
        }
        else
        {
            $msg = $ret['Message'];
            echo "<script>alert('$msg');</script>";
        }
    }
        
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta name="robots" content="all,follow">
        <meta name="googlebot" content="index,follow,snippet,archive">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CalTrans - Joint Training Certification Program</title>

        <meta name="keywords" content="">

        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>

        <!-- Bootstrap and Font Awesome css -->
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- owl carousel css -->

        <link href="css/owl.carousel.css" rel="stylesheet">
        <link href="css/owl.theme.css" rel="stylesheet">	        

        <!-- Theme stylesheet -->
        <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

        <!-- Custom stylesheet - for your changes -->
        <link href="css/custom.css" rel="stylesheet">

        <!-- CSS Animations -->
        <link href="css/animate.css" rel="stylesheet">

        <!-- Favicon
        <link rel="shortcut icon" href="favicon.png"> -->

        <!-- Mordernizr -->
        <script src="js/modernizr-2.6.2.min.js"></script>

        <!-- Responsivity for older IE -->
        <!--[if lt IE 9]>
        <script src="js/respond.min.js"></script>
    <![endif]-->

    </head>

    <body data-spy="scroll" data-target="#navigation" data-offset="120">


        <!-- *** NAVBAR ***
        _________________________________________________________ -->

        <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand scrollTo" href="index.php"><img src="img/logo.png" height="50px" width="100px"></a>
                </div>

                <!--/.nav-collapse -->

            </div>
        </div>
        <!-- /#navbar -->

<br><br>
<br><br>
<br>

<div class="container">
<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
<div class="panel panel-info" >
<h3 class="dark-grey">Sign In</h3>

<div style="padding-top:10px" class="panel-body" >

<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

<form id="loginform" class="form-horizontal" role="form" method="POST">

<div style="margin-bottom: 25px" class="input-group">
<span class="input-group-addon"></span>
<input id="login-username" type="text" class="form-control" name="emailaddress" value="" placeholder="Email Address">
</div>

<div style="margin-bottom: 25px" class="input-group">
<span class="input-group-addon"></span>
<input id="login-password" type="password" class="form-control" name="password" placeholder="Password">
</div>



<div class="input-group">
<div class="checkbox">
<label>
<input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
</label>
</div>
</div>


<div style="margin-top:10px" class="form-group">
<!-- Button -->

<div class="col-sm-12 controls">
<input type="submit" value="Login" class="btn btn-primary">

</div>
</div>


<div class="form-group">
<div class="col-md-12 control">
<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
Don't have an account!
<a href="signup.php">
Sign Up Here
</a>
</div>
</div>
</div>
</form>



</div>
</div>
</div>

<br><br>

    </body>
</html>
