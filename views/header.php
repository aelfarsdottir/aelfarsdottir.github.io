<!DOCTYPE html>

<html>
    <head>
        <!-- http://getbootstrap.com/ -->
        <link href="/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/css/styles.css" rel="stylesheet"/>
        <title>Hello, Haiku!</title>
    </head>
    
    <body>
        <div class="container">
            <div id="top">
                <div>
                    <a href="/"><img alt="Hello, Haiku" src="/views/logo.png"/></a>
                </div>
                <?php if (!empty($_SESSION["id"])): ?>
                    <ul class="nav nav-pills">
                        <li><a href="register.php">Create Account</a></li>
                        <li><a href="login.php">Log In</a></li>
                        <li><a href="password.php">Change Password</a></li>
                        <li><a href="logout.php"><strong>Log Out</strong></a></li>
                    </ul>
                <?php endif ?>
            </div>
            <div id="middle">