<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <?php wp_head(); ?>
</head>
<body>

 <!-- navbar -->
 <nav>
    <div class="logo">Covid19 Indonesia</div>
    <ul>
        <li><?php wp_nav_menu(); ?></li>
        <?php if (!is_user_logged_in()) { ?>
        <li><a class="login" href="<?php echo home_url() . "/wp-login.php" ?>">Login</a></li>
            <?php } ?>
    </ul>

    <div class="mobile">
        <i class="fa-solid fa-bars"></i>
        <div class="mobile-nav">
            <ul>
                <li><?php wp_nav_menu(); ?></li>
            </ul>
        </div>
    </div>
</nav>
