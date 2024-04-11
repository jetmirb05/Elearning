<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <style>
        *{
    font-family: "Rubik", sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    color: #EEEEEE;
}
a{
    text-decoration: none;
    list-style-type: none;
    color: #222831;
}

a:after{
    content: "";
    position: absolute;
    background-color: #76ABAE;
    height: 6px;
    width: 0;
    left: 0;
    bottom: -10px;
    transition: 0.3s;
}


.navbar{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
}

.navbar-child{
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    margin: 24px;
}

.navbar-right-nephew{
    display: flex;
    gap: 10px;
    justify-content: center;
    align-items: center;
}

.navbar-login-btn{
    display: flex;
    justify-content: center;
    align-items: center;
}

.navbar-right-nephew a:hover {
    border-bottom: 2px solid #76ABAE;
    padding-bottom: 2px; 
}

    </style>
</head>
<body>
<div class="navbar">
        <div class="navbar-child">
            <div><img src="./assets/images/asdadadadada.png" alt=""></div>
            <div class="navbar-right-nephew">
                <div style="display: flex; gap: 10px; align-items: center; justify-content: center;">
                    <a href="index.php">Home</a>
                    <a href="courses.php">Courses</a>
                    <a href="about.php">About</a>
                    <?php
                    session_start();
                    if (isset($_SESSION['user_id'])) {
                        
                        echo '<a href="dashboard.php">Dashboard</a>';
                    } 
                    ?>
                </div>
                <?php
                if (isset($_SESSION['user_id'])) {
                    
                    echo '<div class="navbar-login-btn">
                            <form action="" method="POST">
                                <button class="btn" type="submit" name="logout" style="background-color: #222831; color: #EEEEEE;">Logout</button>
                            </form>
                        </div>';
                } else {
                    
                    echo '<div class="navbar-login-btn">
                            <a href="login.php" style="border:none;"><button class="btn" style="background-color: #222831; color: #EEEEEE;">Log in</button></a>
                        </div>';
                }
                ?>
            </div>
        </div>
    </div>
<?php

if (isset($_POST['logout'])) {
   
    $_SESSION = array();

    
    session_destroy();

    
    header("Location: index.php");
    exit;
}
?>
</body>
</html>
