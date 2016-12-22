<?php
    include 'dbmanage.php';
    
    if($_POST)
    {
        $prefix="";
        $firstname = $_POST['firstname'];
        $initial = $_POST['initial'];
        $lastname = $_POST['lastname'];
        $emailaddress = $_POST['emailaddress'];
        $password = $_POST['password'];
        
        $password = password_hash($password, PASSWORD_DEFAULT);

        $phonenumber = $_POST['phonenumber'];
        $addressline1 = $_POST['addressline1'];
        $addressline2 = $_POST['addressline2'];
        $city = $_POST['city'];
        $company = $_POST['company'];
        $other = $_POST['other'];
        $position = $_POST['position'];
        $ret = signup($prefix, $firstname, $initial, $lastname, $emailaddress, $password, $phonenumber, $company, $other, $position, $addressline1 . " , " . $addressline2, $city, $postal);
        
        if($ret['Message']==1)
        {
            $msg = $ret['Message'];
            echo "<script>alert('$msg');</script>";
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

<div class="container-fluid">
<section class="container">
<div class="container-page">
<div class="col-md-6">
<h3 class="dark-grey">Sign up</h3>

<form method="POST">

<div class="form-group col-lg-5">
<label>First Name</label>
<input type="" name="firstname" class="form-control" id="" value="">
</div>

<div class="form-group col-lg-2">
<label>Initial</label>
<input type="" name="initial" class="form-control" id="" value="">
</div>

<div class="form-group col-lg-5">
<label>Last Name</label>
<input type="" name="lastname" class="form-control" id="" value="">
</div>


<div class="form-group col-lg-12">
<label>Email Address</label>
<input type="" name="emailaddress" class="form-control" id="" value="">
</div>

<div class="form-group col-lg-6">
<label>Password</label>
<input type="password" name="password" class="form-control" id="" value="">
</div>

<div class="form-group col-lg-6">
<label>Repeat Password</label>
<input type="password" name="" class="form-control" id="" value="">
</div>

<div class="form-group col-lg-12">
<label>Phone Number</label>
<input type="" name="phonenumber" class="form-control" id="" value="">
</div>

<div class="form-group col-lg-12">
<label>Address line 1</label>
<input type="" name="addressline1" class="form-control" id="" value="">
</div>

<div class="form-group col-lg-12">
<label>Address line 2</label>
<input type="" name="addressline2" class="form-control" id="" value="">
</div>

<div class="form-group col-lg-6">
<label>City</label>
<input type="" name="city" class="form-control" id="" value="">
</div>

<div class="form-group col-lg-6">
<label>Postal Code</label>
<input type="" name="postalcode" class="form-control" id="" value="">
</div>

<h4>Employer Information</h4>

<div class="col-sm-12" style="margin-bottom: 20px;">
<label>Company</label>
<select name="company" class="form-control">
<?php
    $ret = getCompany();
    for($i=0;$i<count($ret);$i++)
    {
        $company_id = $ret[$i]['Company_ID'];
        $company_name = $ret[$i]['Company_Name'];
        echo "<option value='$company_id'>$company_name</option>";
    }
?>
</select>
</div>

<div class="form-group col-lg-12">
<label>Other</label>
<input type="" name="other" class="form-control" id="" value="">
</div>

<div class="form-group col-lg-12">
<label>Position</label>
<input type="" name="position" class="form-control" id="" value="">
</div>

<div class="form-group col-lg-12">
    <div class="checkbox">
        <label><input type="checkbox" value="">I agree to the terms and condition of CalTrans. <a href="">Click</a> here to read  consent form(FERBA).</label>
    </div>
</div>



<div class="col-sm-12">
    <button type="submit" class="btn btn-primary">Register</button>
</div>

</form>

</div>

<div class="col-md-6">
<h3 class="dark-grey">How to Register</h3>


<p>1. In order to register for classes, you must create an account. (If you already have an account, <a href=
"login.php">log-in</a>.)</p>
<p>2. Select the course(s) you’d like to enroll in and add them to your shopping cart.*</p>
<p>3. When you are ready to check out, enter your payment information and submit your order.**</p>
<p>4. After you've submitted your order, you will receive an email with your confirmation number and other details.***</p>

<p>*Please note that there may be a waiting list to enroll in certain courses.<br>
**You will be redirected to another website to complete your payment.<br>
***It may take 24 to 48 hours to receive log-in instructions and access to your course.</p>
</div>
</div>
</section>
</div>

<br><br>

    </body>
</html>
