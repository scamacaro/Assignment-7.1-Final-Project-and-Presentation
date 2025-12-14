<!-- Opening PHP tag to let the server know the following is PHP code. -->
<?php
// Starts a new session or resumes the existing session.
session_start();

// Ensure the user is logged in
if ($_SESSION['username'] == "") {
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
    <title>About Accountability Buddy</title>
    <!-- Link to global CSS file -->
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <!-- Header section -->
    <header>
        <!-- Includes navigation menu from an external PHP file -->
        <?php include "menu.php"; ?>
        <!-- Main page title -->
        <h1>About Accountability Buddy</h1>
    </header>

    <!-- Main content section -->
    <main class="secure-container">
        <section>
            <h2>Our Mission</h2>
            <p>
                Accountability Buddy is designed to help you stay focused, motivated, and consistent in achieving your personal and professional goals.
                We believe that tracking your tasks and sharing progress with others creates a positive environment for growth and success.
            </p>

            <h2>What We Offer</h2>
            <ul>
                <li>Create and manage your tasks easily</li>
                <li>Track your weekly progress</li>
                <li>Invite friends or accountability partners to join you</li>
                <li>Stay motivated and celebrate achievements together</li>
            </ul>

            <h2>Why Accountability Matters</h2>
            <p>
                Studies show that people who track their goals and share progress with others are far more likely to complete them.
                Accountability Buddy makes this process simple, social, and rewarding.
            </p>

            <div class="center-text">
                <!-- Invite friends button -->
                <a href="app.php" class="login-button">Invite Friends</a>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php include "footer.php"; ?>
</body>
</html>
