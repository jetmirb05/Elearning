<?php
include_once "includes/database.php";
include ("includes/navbar.php");


if (isset($_SESSION['user_id'])) {
    $userID = $_SESSION['user_id'];

    try {
        
        $sql = "SELECT c.Title, c.Description, c.Instructor
                FROM Courses c
                INNER JOIN UserCourses uc ON c.CourseID = uc.CourseID
                WHERE uc.UserID = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$userID]);
        $courses = $stmt->fetchAll(PDO::FETCH_ASSOC);

       
        ?>
        <style>
            *{
            font-family: "Rubik", sans-serif;
            
        }
        body{
            background-color: #EEEEEE;
            color: #31363F;
        }
            .course-table {
                border-collapse: collapse;
                width: 1280px; 
                margin: auto; 
                color: #31363F;
                margin-bottom:390px;
            }

            .course-table th,
            .course-table td {
                border: 1px solid #ddd;
                padding: 8px;
            }

            .course-table th {
                background-color: #f2f2f2;
                text-align: left;
            }

            .course-table tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            .course-table tr:hover {
                background-color: #ddd;
            }
        </style>
        <table class="course-table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Instructor</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($courses as $course): ?>
                    <tr>
                        <td><?php echo $course['Title']; ?></td>
                        <td><?php echo $course['Description']; ?></td>
                        <td><?php echo $course['Instructor']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    
    header("Location: login.php");
    exit();
}

include("includes/footer.php");
?>
