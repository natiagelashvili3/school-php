<?php
    session_start();
    include("database.php");
?>  

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body id="image">
    <header class="header">
        <div class="menu">
            <a href="index.php">Home</a>
            <a href="categories.php">Categories</a>

            <?php if(isset($_SESSION) && isset($_SESSION['user_id'])){ ?>
                <a href="add.php">Add Post</a>
                <a href="add-category.php">Add Category</a>
                <a href="account.php">Account</a>
                <a href="logout.php">Logout</a>
            <?php } else { ?>
                <a href="login.php">Login / Registration</a>
            <?php } ?>
            
        </div>
    </header>  