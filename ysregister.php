<?php 
    require_once "inc/auth/User.php"; 
    $user = new User();    
    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['register'])){
        $userReg = $user->userRegistration($_POST);
    }  
?>
<!doctype html>
<html lang="en">
<head>
<title>:: YS Hospital :: Sign Up</title>
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
        <p class="lead">Create an account</p>
        <?php if(isset($userReg)): ?>
        <div class="alert alert-danger">
            <strong>Error !</strong>
            <?php echo $userReg; ?>
        </div>
        <?php endif;?>
        <?php if(isset($user->succesMsg)): ?>
        <div class="alert alert-success">
            <strong>Success !</strong>
            <?php echo $user->succesMsg; ?>
        </div>
        <?php endif;?>
    </div>
<div class="body">
<form class="form-auth-small" method="POST">
    <div class="form-group">
        <label for="signup-email" class="control-label sr-only">Full Name</label>
        <input type="text" name="flname" class="form-control" id="flname" placeholder="Full Name">
    </div>
    <div class="form-group">
        <label for="signup-email" class="control-label sr-only">Username</label>
        <input type="text" name="uname" class="form-control" id="uname" placeholder="Username">
    </div>
    <div class="form-group">
        <label for="signup-email" class="control-label sr-only">Email</label>
        <input type="email" name="email" class="form-control" id="signup-email" placeholder="Your email">
    </div>
    <div class="form-group">
        <label for="pass" class="control-label sr-only">Password</label>
        <input type="password" name="pass" class="form-control" id="pass" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="cnf_pass" class="control-label sr-only">Confirm Password</label>
        <input type="password" name="cnf_pass" class="form-control" id="cnf_pass" placeholder="Confirm Password">
    </div>
    <button type="submit" name="register" class="btn btn-primary btn-lg btn-block">REGISTER</button>
    <div class="bottom">
        <span class="helper-text">Already have an account? <a href="yslogin.php">Login</a></span>
    </div>
</form>
<div class="separator-linethrough"><span>OR</span></div>
<button class="btn btn-signin-social"><i class="fa fa-facebook-official facebook-color"></i> Sign in with Facebook</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
	<!-- END WRAPPER -->
</body>
</html>
