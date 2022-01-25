<?php 
    require_once "inc/auth/User.php"; 
    require_once "inc/auth/Session.php"; 
    require_once "functions.php";   
    Session::init();
   if(Session::checkLogin()){
    header("Location:index.php");
    }  
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])){
        $user =  new User();
        $usrLogin = $user->userLogin($_POST);
    }

?>

<!doctype html>
<html lang="en">
<head>
<title>:: YS Hospital :: Login</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/color_skins.css">
</head>

<body class="theme-cyan">
<!-- WRAPPER -->
<div id="wrapper">
<div class="vertical-align-wrap">
<div class="vertical-align-middle auth-main">
    <div class="auth-box">
        <div class="top">
            <img src="assets/images/logo-white.svg" alt="Lucid">
        </div>
        <div class="card">
            <div class="header">
                <p class="lead">Login to your account</p>
                <?php if(isset($usrLogin)): ?>
                    <div class="alert alert-danger">
                        <strong>Error !</strong>
                        <?php echo $usrLogin; ?>
                    </div>
                <?php endif;?>
            </div>
            <div class="body">
<form class="form-auth-small" method="POST">
    <div class="form-group">
        <label for="signin-email" class="control-label sr-only">Username Or Email</label>
        <input type="text" class="form-control" id="signin-email" name="usremail" placeholder="Username Or Email">
    </div>
    <div class="form-group">
        <label for="signin-password" class="control-label sr-only">Password</label>
        <input type="password" class="form-control" id="signin-password" name="pass"  placeholder="Password">
    </div>
    <div class="form-group clearfix">
        <label class="fancy-checkbox element-left">
            <input type="checkbox">
            <span>Remember me</span>
        </label>								
    </div>
    <button type="submit" name="login" class="btn btn-primary btn-lg btn-block">LOGIN</button>
    <div class="bottom">
        <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="page-forgot-password.html">Forgot password?</a></span>
        <span>Don't have an account? <a href="ysregister.php">Register</a></span>
    </div>
</form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- END WRAPPER -->
</body>
</html>
