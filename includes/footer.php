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

            .footer{
    width: 100%;
    background-color: #222831;
    color: #EEEEEE;
    display: flex;
    gap: 100px;
    align-items: center;
    justify-content: center;
}

.footer-content{
    display: flex;
    gap: 20px;
}

.footer-content-child{
    display: flex;
    flex-direction: column;
    gap: 10px;
    color: #EEEEEE;
}

.footer-a{
    color: #EEEEEE;
}

.footer-child{
    width: 100%;
    margin: 100px;
    display: flex;
    gap: 200px;
    align-items: center;
    justify-content: center;
}
        </style>
</head>
<body>
<div class="footer">
        <div class="footer-child">
            <div>
                <div>
                    <img src="footer-logo.png" alt="">
                </div>
                <div>
                    <p>&copy; CodeCrafters Academy, Inc.</p>
                </div>
            </div>
            <div class="footer-content">
                <div class="footer-content-child">
                    <a href="#" class="footer-a">Home</a>
                    <a href="#" class="footer-a">Courses</a>
                    <a href="#" class="footer-a">About</a>
                    <a href="#" class="footer-a">Contact Us</a>
                </div>
                <div class="footer-content-child">
                    <a href="#" class="footer-a">Terms</a>
                    <a href="#" class="footer-a">Privacy policy</a>
                    <a href="#" class="footer-a">Help & Support</a>
                    <a href="#" class="footer-a">Investors</a>
                </div>
                <div class="footer-content-child">
                    <a href="#" class="footer-a">Careers</a>
                    <a href="#" class="footer-a">Blog</a>
                    <a href="#" class="footer-a">Cookie settings</a>
                    <a href="#" class="footer-a">Affiliate</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>