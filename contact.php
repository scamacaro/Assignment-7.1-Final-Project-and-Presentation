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
    <title>Contact Us</title>

    <!-- jquery library -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- link to a js file -->
    <script src="script.js"></script>

    <!-- link to the global css file -->
    <link rel="stylesheet" href="main.css">   
</head>
<body>
     <!-- Header section  -->
    <header>
        <!-- Includes the navigation menu from an external PHP file (menu.php) -->
        <?php include "menu.php"; ?>
        <!-- Main page title displayed at the top of the page -->
        <h1>Accountability Buddy ~ Contact Us</h1>
    </header>
    <main>
        <!-- Primary heading for this section -->
        <h1>Get in Touch</h1>

        <!-- Start of the contact form -->
        <form id="frmContact" name="frmContact" method="POST" action="contact_submit.php">            
            <!-- Container div for the Name input field -->
            <div>
                <label for="txtName">Your Name:</label>
                <!-- Text input for entering the user's name -->
                <input type="text" id="txtName" name="txtName" required>
            </div>

            <!-- Container div for the Email input field -->
            <div>
                <label for="txtEmail">Email Address:</label>
                <!-- Text input for entering the user's email address -->
                <input type="text" id="txtEmail" name="txtEmail" required>
            </div>

            <!-- Container div for the Subject input field -->
            <div>
                <label for="txtSubject">Subject:</label>
                <!-- Text input for entering the subject of the message -->
                <input type="text" id="txtSubject" name="txtSubject" required>
            </div>

            <!-- Container div for the Message textarea -->
            <div>
                <label for="txtMessage">Your Message:</label>
                <!-- Textarea for entering multi-line messages -->
                <textarea id="txtMessage" name="txtMessage" rows="10" cols="30" required></textarea>
                <div id="divCharCount" class="char-count">0/500 Characters</div>
            </div>

            <!-- Submit button for the form -->
            <button type="submit">Send Message</button>
        </form>
    </main>
    <?php include "footer.php"; ?>
</body>
</html>
