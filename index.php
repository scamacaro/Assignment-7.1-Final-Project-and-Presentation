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
    <title>Accountability Buddy ~ Home</title>

    <!-- link to the global css file-->
    <link rel="stylesheet" href="main.css">
</head>

<!-- Displays the visible body content of the web page -->
<body>
    <!-- Header section  -->
    <header>
        <!-- Includes the navigation menu from an external PHP file (menu.php) -->
        <?php include "menu.php"; ?>
        <!-- Main page title displayed at the top of the page -->
        <h1><br>Welcome to Accountability  Buddy</h1>
        <h2><br>A supportive space designed to help you stay committed,<br> motivated, and accountable while accomplishing your goals.</h2>
    </header>

    <!-- Main content section -->
    <main>
        <section>
            <!-- Image container that holds an of image Mars Horizon Tours -->
            <div class="welcome-image">
                <!-- Mars Horizon Tours Image and the width attribute defines the displayed width of the image -->
                <img src="AccBuddy.png" alt="Accountability Buddy Logo" width="400">
            </div>

            <!-- Company description -->
            <div class="company-description">
  <p class="center-text">
    Accountability Buddy is built to help you turn intentions into accomplishments.
</p>
<p>
    Our platform allows you to create and track your tasks, set meaningful goals, and stay consistent
    through accountability. What makes Accountability Buddy special is the ability to invite friends,
    teammates, or accountability partners to join you, view progress, and support each other along the way.
</p>
<p>
    Whether you're working on personal growth, fitness, learning new skills, or completing everyday tasks,
    Accountability Buddy helps you stay focused, motivated, and proud of your progress, one task at a time.
</p>
<p class="center-text">
   <b> Start your journey now!</b>
</p>
<p class="center-text">
    <a href="login.php" class="login-button">Login</a>
</p>
        </div>
    </section>
</main>
<!-- End of the visible page content -->
 <?php include "footer.php"; ?>
</body>
</html>
