<?php
include_once "includes/database.php";
include "includes/navbar.php";

if (isset($_GET['course_id'])) {
    $courseID = $_GET['course_id'];

    try {
        $sql = "SELECT Title, Description, Instructor FROM Courses WHERE CourseID = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$courseID]);
        $course = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($course) {
            if (isset($_SESSION['user_id'])) {
                if (isset($_POST['comment'])) {
                    $userID = $_SESSION['user_id'];
                    $comment = $_POST['comment'];

                    $stmt = $pdo->prepare("INSERT INTO Comments (UserID, CourseID, CommentText) VALUES (?, ?, ?)");
                    $stmt->execute([$userID, $courseID, $comment]);
                }
            }

          
            $commentsStmt = $pdo->prepare("SELECT c.CommentText AS Comment, u.Username FROM Comments c INNER JOIN Users u ON c.UserID = u.UserID WHERE c.CourseID = ?");
            $commentsStmt->execute([$courseID]);
            $comments = $commentsStmt->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title><?php echo $course['Title']; ?></title>
                <style>
                    *{
                        font-family: "Rubik", sans-serif;
                    }
                    body{
                        background-color: #EEEEEE;
                        color: #31363F;
                    }
                </style>
            </head>
            <body>
                <div class="course" style="width:100%; background-color: white; display:flex; align-items:center; justify-content:center; margin-bottom:260px;">
                    <div class="courses-child" style="width:1280px; display:flex; align-items:center; justify-content:center; color:white; background-color: #222831; padding:50px; border-radius:13px;">
                        <div style="width:100%; display:flex; flex-direction:column; gap:20px;">
                            <div>
                                <h1><?php echo $course['Title']; ?></h1>
                                <p><?php echo $course['Description']; ?></p>
                            </div>
                            <div style="display:flex; gap:20px; justify-content:space-between;">
                                <div>
                                    <button style="padding: 5px 15px 5px 15px; background-color: white; color:#222831; border-radius:8px; border:none;">Enroll Now</button>
                                </div>
                                <p>Course instructor: <?php echo $course['Instructor']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="comments-section" style="width:100%; background-color: #f8f9fa; color:#31363F; padding:50px;">
                    <h2>Comments</h2>
                    <?php foreach ($comments as $comment): ?>
                        <div class="comment" style="background-color: white; padding:20px; border-radius:8px; margin-bottom:10px;">
                            <p><?php echo $comment['Comment']; ?></p>
                            <small>Posted by: <?php echo $comment['Username']; ?></small>
                        </div>
                    <?php endforeach; ?>

                    <?php if (isset($_SESSION['user_id'])): ?>
                        <form action="" method="post" style="margin-top: 20px;">
                            <div class="form-group" style="margin-bottom:20px;">
                                <label for="comment">Add a Comment</label>
                                <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    <?php else: ?>
                        <p>Please <a href="login.php">login</a> to add a comment.</p>
                    <?php endif; ?>
                </div>
            </body>
            </html>
            <?php
        } else {
            echo "Course not found.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Course ID is missing.";
}
include "includes/footer.php";
?>
