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
    <title>Accountability Buddy Completed Weeks</title>

    <!-- jquery library -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- link to the global css file -->
    <link rel="stylesheet" href="main.css">  
</head>
<body>
    <!-- Header section  -->
     <header>
        <!-- Includes the navigation menu from an external PHP file (menu.php) -->
        <?php include "menu.php"; ?>
        <!-- Main page title displayed at the top of the page -->
        <h1>Accountability Buddy<p>Weekly Progress Tracker</p></h1>
    </header>

    <!-- Main content section of the page -->
    <main>
        <!-- Section heading for displaying completed task weeks -->
        <h2>Completed Task Weeks:</h2>

        <!-- Unordered list that will contain tasks dynamically -->
        <ul id="ulTasks"></ul>

        <!-- Paragraph container used to center the link button --> 
        <p class="center-text">
            <!-- 'href="add_task.php"' directs the user to the add_task.php page when clicked -->
            <a href="add_task.php" class="login-button">Add Task</a>
        </p>
    </main>
    
    <script>
        // wait until all of the HTML elements have been rendered
        $(document).ready(function(){
            // make the ajax call
            $.ajax({
                url: "task.json",
                method: "GET",
                dataType: "json",
                success: function(data){
                    // loop through the data and pass the task and done status to a function that will render them to the unordered list
                    data.forEach(task => addTaskToUL(task.text, task.done));
                },
                error: function(){
                    console.error("Could not load file");
                }
            }); //$.ajax({

            // function to add the tasks to the UL
            function addTaskToUL(task, done){
                let li = $('<li></li>').text(task + " " + done);

                $('#ulTasks').append(li);
            }

        }); //$(document).ready(function(){
    </script>
</body>
<?php include "footer.php"; ?>
</html>