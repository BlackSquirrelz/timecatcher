<?php
/**
 * Created by PhpStorm.
 * User: andreas.martin
 * Date: 13.09.2017
 * Time: 21:28
 */
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2018_webengineering</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
<div class="container" style="display:flex;flex-direction:column;justify-content:center;">
    <nav class="navbar navbar-light navbar-expand-md" id="navbar">
        <div class="container-fluid"><a class="navbar-brand" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/home"><img src="assets/img/timecatcher-icon.png" class="logo"><strong>&nbsp; TimeCatcher</strong></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/features">Features</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/pricing">Pricing</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/login">Log in</a></li>
                </ul><a class="btn btn-primary" role="button" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/register">SIGN UP</a></div>
        </div>
    </nav>
    <form action="<?php echo $GLOBALS["ROOT_URL"]; ?>/login" method="post">
        <div class="form-group">
            <input class="form-control" type="username" name="username" placeholder="Username">
        </div>
        <div class="form-group">
            <input class="form-control" type="email" name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="password" placeholder="Password">
        </div>
        <div class="form-group">
            <div class="checkbox">
                <label class="control-label">
                    <input type="checkbox" name="remember" />Remember me</label>
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Log In</button>
        </div><a class="text-primary already" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/password/request">Reset password</a><br>
        <a class="text-primary already" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/register">Not account yet? Press here!</a></form>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>