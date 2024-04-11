<?php
session_start();
include("includes/database.php");


$register_form_errors = array();


if(isset($_POST['register_btn'])) {
    
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password']; 

   
    if(empty($username) || empty($email) || empty($password)) {
        $register_form_errors[] = "All fields are required";
    } else {
        
        $stmt = $pdo->prepare("SELECT UserID FROM Users WHERE Email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();
        if($user) {
            $register_form_errors[] = "Email is already registered";
        } else {
           
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $pdo->prepare("INSERT INTO Users (Username, Email, Password) VALUES (?, ?, ?)");
            $stmt->execute([$username, $email, $hashed_password]);

           
            header("Location: login.php");
            exit();
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: "Rubik", sans-serif;
        }
        body{
            background-color: #EEEEEE;
            color: #EEEEEE;
        }
    </style>
</head>
<body>
    <div class="d-flex flex-column justify-content-center align-items-center" style="width: 100%; height: 100vh;">
        <a class="mb-5" href="index.php">
            <img src="./assets/images/123.png" alt="">
        </a>
        <div class="" style="background-color: #222831; border-radius: 8px;">
            <div class="d-flex flex-column mx-5 my-5">
                <div class="d-flex flex-column mb-4">
                    <h1 style="font-size: 24px;">Ready to start your programming career?</h1>
                    <p><a href="signup.php">Create an account!</a> It takes less than a minute.</p>
                </div>
                <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
                    <?php if(isset($register_form_errors) && !empty($register_form_errors)) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php foreach($register_form_errors as $error) {
                                echo $error . "<br>";
                            } ?>
                        </div>
                    <?php } ?>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button name="register_btn" type="submit" class="btn btn-primary">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
