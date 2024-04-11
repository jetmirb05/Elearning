<?php include('includes/navbar.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
    .mainhero{
    display: flex;
    justify-content: center;
    align-items: center;
}

.mainhero-child{
    width: 1280px;
    background-image: linear-gradient(rgba(34, 40, 49, 0.5), rgba(34, 40, 49, 0.5)), url('assets/images/hero.jpg'); 
    background-color: rgba(0, 0, 0, 0.6);
    background-position: center;
    background-size: cover;
    height: 450px;
    display: flex;
    align-items: start;
    justify-content: start;
    
}

.mainhero-textarea{
    background-color: #EEEEEE;
    height: 200px;
    width: 500px;
    color: #222831;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 10px;
    margin: 50px 0 0 50px;
}

.mainhero-p{
    height: 50px;
    width: 364.44px;
}

.homebanner{
    width: 100%;
    display: flex;
    flex-direction: column;
    gap: 20px;
    background-color: #31363F;
    align-items: center;
    justify-content: center;
    margin-top: 50px;
}


.banner-h3{
    font-size: 20px;
    color: #EEEEEE;
}

.homebanner-sponsors{
    width: 1280px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 50px;
}

.homebanner-child{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 50px;
}

.mainlearners{
    width: 100%;
    display: flex;
    justify-content: center;
    margin: 100px 0 100px 0;
    
}

.learners{
    width: 1280px;
    display: flex;
    flex-direction: column;
    gap: 20px;
    justify-content: center;
    color: #31363F;
}

.learners-child{
    display: flex;
    gap: 20px;
}


.learners-card-child{
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    gap: 10px;
    border: 0.5px solid #31363F;
    padding: 20px 20px 0 20px;
}

.learners-card-p{
    height: 110px;
    width: 330px;
}

.user-p{
    font-weight: bold;
    font-size: 18px;
}

.learners-span{
    color: #76ABAE;
}

.learners-p1{
    font-size: 24px;
}

.end{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #31363F;
    margin: 100px 0 100px 0;
}

.end-child{
    width: 1280px;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 50px;
}

.end-img{
    height: 400px;
    width: 400px;
}

.endchild-btn{
    border: 1px solid black;
}

.end-child1{
    display: flex;
    flex-direction: column;
    gap: 30px;
}
</style>
<body>
    <!--HERO-->
    <div class="mainhero">
        <div class="mainhero-child">
            <div class="mainhero-textarea">
                <h1 style="font-size: 24px;">NextJS is taking over the world!</h1>
                <p class="mainhero-p">Learn skills that help you play it. Courses on NextJS (and much more) from $11.99
                    through June 28.</p>
            </div>
        </div>

    </div>

    <!--BANNER-->
    <div class="homebanner">
        <div class="homebanner-child">
            <h3 class="banner-h3">Trusted by over 15,000 companies and millions of learners around the world
            </h3>
        </div>
        <div class="homebanner-sponsors">
            <img src="assets/images/collaboration/volkswagen.svg" alt="">
            <img src="assets/images/collaboration/samsung.svg" alt="">
            <img src="assets/images/collaboration/cisco.svg" alt="">
            <img src="assets/images/collaboration/att.svg" alt="">
            <img src="assets/images/collaboration/procter_gamble.svg" alt="">
            <img src="assets/images/collaboration/hewlett_packard_enterprise.svg" alt="">
            <img src="assets/images/collaboration/citi.svg" alt="">
            <img src="assets/images/collaboration/ericsson.svg" alt="">
        </div>
    </div>

    <!--PEOPLE COMMENTS-->
    <div class="mainlearners">
        <div class="learners">
            <div>
                <h2 class="learners-p1">How learners like you are achieving their goals</h2>
            </div>
            <div class="learners-child">
                <div class="learners-card">
                    <div class="learners-card-child">
                        <div>
                            <img src="assets/images/quote.svg" alt="" height="20px" width="20px">
                        </div>
                        <div class="learners-card-p">
                            <p>I am proud to say that after a few months of taking this course...<span
                                    class="learners-span">I passed my exam and am now an AWS Certified Cloud
                                    Practitioner!</span> This content was exactly what the CCP exam covered.</p>
                        </div>
                        <div>
                            <p class="user-p">- Will A</p>
                        </div>
                        <div></div>
                    </div>
                </div>
                <div class="learners-card">
                    <div class="learners-card-child">
                        <div>
                            <img src="assets/images/quote.svg" alt="" height="20px" width="20px">
                        </div>
                        <div class="learners-card-p">
                            <p>I am proud to say that after a few months of taking this course...<span
                                    class="learners-span">I passed my exam and am now an AWS Certified Cloud
                                    Practitioner!</span> This content was exactly what the CCP exam covered.</p>
                        </div>
                        <div>
                            <p class="user-p">- Will A</p>
                        </div>
                        <div></div>
                    </div>
                </div>
                <div class="learners-card">
                    <div class="learners-card-child">
                        <div>
                            <img src="assets/images/quote.svg" alt="" height="20px" width="20px">
                        </div>
                        <div class="learners-card-p">
                            <p>I am proud to say that after a few months of taking this course...<span
                                    class="learners-span">I passed my exam and am now an AWS Certified Cloud
                                    Practitioner!</span> This content was exactly what the CCP exam covered.</p>
                        </div>
                        <div>
                            <p class="user-p">- Will A</p>
                        </div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--LAST SECTION OF HOME-->
    <div class="end">
        <div class="end-child">
            <div class="end-child1">
                <div>
                    <img src="assets/images/asdadadadada.png" alt="">
                </div>
                <div>
                    <h1>Upskill yourself with <br>CodeCrafters Academy</h1>
                </div>
                <div>
                    <ul style="display:flex; flex-direction:column; gap:20px;">
                        <li>
                            Unlimited access to <span class="learners-span">25,000+</span> premier CodeCrafters Academy
                            courses,<br> accessible anytime, anywhere.</li>
                        <li>
                            Global curriculum spanning 14 languages
                        </li>
                        <li>
                            Leading certifications in technology and programming
                        </li>
                    </ul>
                </div>
                <div>
                    <button class="btn endchild-btn" style="border: 0.5px solid #31363F;">Get Started</button>
                </div>
            </div>
            <div>
                <img src="assets/images/end.jpg" alt="" class="end-img">
            </div>
        </div>
    </div>
</body>
</html>

<?php include('includes/footer.php'); ?>