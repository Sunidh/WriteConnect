<?php
require 'config/database.php';

//fetch current user from database

if(!isset($_SESSION['user-id'])) {
    header('location: ' . ROOT_URL . 'signin.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP & MySql Blog Application
    </title>
    <link rel="stylesheet" href=" <?= ROOT_URL ?>css/style.css">
    <!-- iconscout cdn -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <!-- Google fonts Montserrat -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Urbanist&display=swap"
        rel="stylesheet">

</head>

<body>
    <nav>
        <div class="container nav__container">
            <a href="index.php" class="nav__logo">WRITECONNECT</a>
            <ul class="nav__items">
                <li><a href=" <?= ROOT_URL ?>blog.php">Blog</a></li>
                <li><a href=" <?= ROOT_URL ?>about.php">About</a></li>
                <li><a href="<?= ROOT_URL ?>services.php">Services</a></li>
                <li><a href="<?= ROOT_URL ?>contact.php">Contact</a></li>
          
               <?php if(isset($_SESSION['user-id'])) : ?>
                <li class="nav__profile">
                    <div class="avatar"><img src="<?= ROOT_URL . 'images/' . $avatar['avatar'] ?>"></div>
                    <ul>
                        <li><a href="<?= ROOT_URL ?>admin/index.php">Dashboard</a></li>
                        <li><a href="<?= ROOT_URL ?>logout.php">log Out</a></li>
                    </ul>
                </li>
                <?php else : ?>
               <li> <a href="<?= ROOT_URL ?>signin.php">Sign In</a></li>
                <?php endif ?>
            </ul>
            <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
            <button id="close__nav-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>

    <!-- =================== END OF NAV ============ -->