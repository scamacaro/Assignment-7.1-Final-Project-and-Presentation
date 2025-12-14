<?php
session_start();

// the user must be logged in to access this page;

// if the user is not loged in, direct back to the login page 
if ($_SESSION['username'] ==""){
    // add in a redict to the intranet page
    header("Location: login.php");
}

?>

<!-- Declares the document type as HTML5 -->
<!DOCTYPE html>
<!-- Starts the HTML document and sets the language to English -->
<html lang="en">
<head>
    <!-- Defines the character encoding as UTF-8 for proper text display -->
    <meta charset="UTF-8">
    <!-- Makes the page responsive to different screen sizes -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Sets the title that appears on the browser tab -->
    <title>Accountability Buddy ~ Dashboard</title>
    <!-- link to the global css file-->
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <!-- Header section  -->
    <header>
        <!-- Includes the navigation menu from an external PHP file (menu.php) -->
        <?php include "menu.php"; ?>
        <!-- Main page title displayed at the top of the page -->
        <h1>Welcome to your Accountability Buddy Dashboard</h1>
    </header>

    <main class="secure-container">
        <h2>Your Task Hub</h2>
        <p>Here you can add new tasks, track your progress, and stay motivated every day.</p>
        <p>Accountability Buddy is designed to help you stay consistent, achieve your goals, and celebrate your accomplishments along the way.</p>
        <p>Invite friends or accountability partners to join you, see progress together, and support each other as you complete tasks.</p>
        
        
        <div class="center-text">
            <nav>
                <a href="add_task.php">Add Task</a>
                <a href="weeklytracker.php">Check Out Weekly Progress</a>
                <a href="app.php">Invite A Friend</a>
            </nav>
        </div>
    </main>
    <?php include "footer.php"; ?>
</body>
</html>