<?php
require_once("includes/classes/config.php");
require_once("includes/classes/PreviewProvider.php");
require_once("includes/classes/Entity.php");
require_once("includes/classes/EntityProvider.php");
require_once("includes/classes/CategoryContainers.php");
require_once("includes/classes/ErrorMessage.php");
require_once("includes/classes/SeasonProvider.php");
require_once("includes/classes/Season.php");
require_once("includes/classes/Video.php");

if(!isset($_SESSION["userLoggedIn"])){
    header("Location: register.php");
}

$userLoggedIn = $_SESSION["userLoggedIn"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome to 72-LXXII</title>
    <link rel="stylesheet" type="text/css" href="assets/style/style.css">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c0b3a9afd3.js" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>

</head>
<body>
    <div class="wrapper">

    <div class="topBar">
        <div class="logoContainer">
            <a href="index.php">
                <img src="assets/images/logo.png" alt="Logo">
            </a>
        </div>

        <ul class="navLinks">
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php">TV Shows</a></li>
            <li><a href="index.php">Movies</a></li>
        </ul>

        <div class="rightItems">
            <a href="search.php">
                <i class="fa-solid fa-magnifying-glass"></i>
            </a>

            <a href="profile.php">
                <i class="fa-solid fa-user"></i>
            </a>
        </div>
    </div>