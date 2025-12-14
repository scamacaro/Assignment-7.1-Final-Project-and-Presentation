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
    <title>Survey</title>

    <!-- jquery library -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- link a js file -->
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
        <h1>Accountability Buddy ~ Survey</h1>
    </header>
    <main>
        <!-- Main heading for the survey page -->
        <h1>Feedback Survey</h1>

        <!-- Start of the survey form -->
        <form id="frmSurvey" name="frmSurvey">            
            <label for="selSat">How satisfied are you with our website?</label>
            <select id="selSat" name="selSat">
                <option value="">Select an option:</option>
                <option value="5">Very Satisfied</option>
                <option value="4">Somewhat Satisfied</option>
                <option value="3">Neutral</option>
                <option value="2">Somewhat unsatisfied</option>                
                <option value="1">Very Unsatisfied</option>
            </select>

            <!-- Container for follow-up question -->
            <div id="divFollowUp" class="hidden">
                <label for="txtFollowUp">What can we do to make things better?</label>
                <textarea id="txtFollowUp" name="txtFollowUp" rows="10" cols="30"></textarea>
            </div>

            <!-- Label for general comments textarea -->
            <label for="txtComments">General Comments</label>
            <!-- Textarea for general feedback -->
            <textarea id="txtComments" name="txtComments" rows="10" cols="30"></textarea>
            <!-- Character counter display -->
            <div id="divCharCount" class="char-count">0/250 Characters</div>

            <!-- Button to submit the survey -->
            <button>Submit Survey</button>
        </form>

        
    </main>
    <?php include "footer.php"; ?>
</body>
</html>