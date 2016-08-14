<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <link rel="stylesheet" href="<?=APP_ROOT?>/content/style.css" />
    <link rel="icon" href="<?=APP_ROOT?>/content/images/favicon.ico" />
    <script src="<?=APP_ROOT?>/content/scripts/jquery-3.0.0.min.js"></script>
    <script src="<?=APP_ROOT?>/content/scripts/blog-scripts.js"></script>
    <title><?php if (isset($this->title)) echo htmlspecialchars($this->title) ?></title>
</head>

<body>
<?php require_once('show-notify-messages.php'); ?>
<div class="container">
    <div class="row">
        <div class="welcome-image"></div>
    </div>

    <div class="row header-nav">
        <header>
            <div class="col-lg-2 logo">
                <a href="<?=APP_ROOT?>"><img src="<?=APP_ROOT?>/content/images/site-logo.png"></a>
            </div>
            <div class="col-lg-7">
                <ul class="nav nav-tabs">
                    <li>
                        <a href="<?=APP_ROOT?>/">Home</a>
                    </li>
                    <?php if ($this->isLoggedIn) : ?>
                        <li>
                            <a href="<?=APP_ROOT?>/posts">Posts</a>
                        </li>
                        <li>
                            <a href="<?=APP_ROOT?>/posts/create">Create Post</a>
                        </li>
                        <li>
                            <a href="<?=APP_ROOT?>/users">Users</a>
                        </li>
                    <?php else: ?>
                        <li>
                            <a href="<?=APP_ROOT?>/users/login">Login</a>
                        </li>
                        <li>
                            <a href="<?=APP_ROOT?>/users/register">Register</a>
                        </li>
                    <?php endif; ?>
                    <?php if ($this->isLoggedIn) : ?>
                        <div id="logged-in-info">
                            <span>Hello, <b><?=htmlspecialchars($_SESSION['username'])?></b></span>
                            <form method="post" action="<?=APP_ROOT?>/users/logout">
                                <input type="submit" value="Logout"/>
                            </form>
                        </div>
                    <?php endif; ?>
                </ul>


            </div>
            <div class="col-lg-3 favicons">
                <a href="https://www.facebook.com/">
                    <img src="http://www.real--comps.com/images/facebook.png" alt="facebook">
                </a>
                <a href="https://www.twitter.com/">
                    <img src="http://com.faveeo.wcd2016socialmediastream.s3-website-eu-west-1.amazonaws.com/app/img/twitter.cecdcf20.png" alt="twitter">
                </a>
                <a href="https://plus.google.com/">
                    <img src="http://www.pressureforever.com/wp-content/uploads/2015/12/Google-plus-favicon-logo.png" alt="googleplus">
                </a>
                <a href="https://www.instagram.com/">
                    <img src="https://www.instagram.com/favicon.ico" alt="instagram">
                </a>
            </div>
        </header>
    </div>


</div>
