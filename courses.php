<?php
include("includes/navbar.php");
include("includes/database.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
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
.courses{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom:320px;
}

.courses-child{
    width: 1280px;
    display: grid;
    align-items: center;
    justify-content: space-between;
    grid-template-columns: repeat(3, 1fr); 
    gap: 20px; 
    margin: 0 auto;
}

.card{
    width: 413px;
    height: 200px;
    background-color: #222831;
    color: #EEEEEE;
    border: 0.5px solid #222831;
    border-radius: 13px;
}

    </style>
</head>
<body>
<div class="courses">
<div class="courses-child">
    
        <?php
        include('includes/database.php');

        try {
            
            $sql = "SELECT CourseID, Title, Description, Instructor FROM Courses";
            $stmt = $pdo->query($sql);

          
            if ($stmt->rowCount() > 0) {
                
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $courseID = $row['CourseID'];
        ?>
                
                <div class="card" style="background-color:#222831; color:#EEEEEE; border-radius:13px; height:180px;">
                    <a href="course.php?course_id=<?php echo $courseID; ?>" class="card-link" style="background-color:#222831; color:#EEEEEE; border-radius:13px;">
                        <div style="margin: 20px 0 0 20px;">
                            <h2><?php echo $row['Title']; ?></h2>
                            <p>Instructor: <?php echo $row['Instructor']; ?></p>
                        </div>
                    </a>
                </div>
                
        <?php
                }
            } else {
                echo '<div class="no-courses">No courses available.</div>';
            }
        } catch (PDOException $e) {
         
            echo "Error: " . $e->getMessage();
        }
        ?>
        
        </div>
    </div>
</body>
</html>
<?php
include("includes/footer.php")?>