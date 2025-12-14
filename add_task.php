<?php
    // get the connection info to the database
    require_once 'db_connection.php';

    // handle the form if it is posted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // get the values that the user has entered and escape them
        $taskdate = mysqli_real_escape_string($db_conn, $_POST["txtTaskDate"]);
        $taskadd  = mysqli_real_escape_string($db_conn, $_POST["txtTaskAdd"]);

        // set up the stored procedure to insert the new task record
        $sql = "CALL sptbltasksadd('$taskdate', '$taskadd')";

        // run the query to add the record to the database and check for errors
        if (!mysqli_query($db_conn, $sql)) {
            echo "<p style='color:red;'>Error adding task: " . mysqli_error($db_conn) . "</p>";
        }

        // clear any remaining results from the stored procedure to avoid "Commands out of sync" errors
        while (mysqli_next_result($db_conn)) {;}
    }

    // get all tasks
    $sql = "CALL sptbltasksgetall";
    $result = mysqli_query($db_conn, $sql);

    // check for errors
    if (!$result) {
        echo "<p style='color:red;'>Error fetching tasks: " . mysqli_error($db_conn) . "</p>";
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
    <title>Accountability Buddy Tasks</title>

    <!-- link to the global css file -->
    <link rel="stylesheet" href="main.css">  
</head>
<!-- Displays the visible body content of the web page -->
<body>
     <!-- Header section  -->
     <header>
        <!-- Includes the navigation menu from an external PHP file (menu.php) -->
        <?php include "menu.php"; ?>
         <!-- Main page title displayed at the top of the page -->
        <h1>Welcome to Accountability Buddy Task Page</h1>
    </header>

    <!-- Main content section -->
    <main>
        <!-- Start of the form for adding tasks -->
        <h2>Add a Task:</h2>
        <form name="frmAddTasks" id="frmAddTasks" method="POST" action="add_task.php">
            <!-- Div container to group the date label and input -->
            <div>
                <!-- Label element for the task date input -->
                <label for="txtTaskDate">Task Date:</label>
                <!-- Input element for entering the task date -->
                <input type="text" id="txtTaskDate" name="txtTaskDate" required>
            </div>
            <!-- Div container to group the task description label and input -->
            <div>
                <!-- Label element for the task description input -->
                <label for="txtTaskAdd">Task:</label>
                <!-- Input element for entering the task description -->
                <input type="text" id="txtTaskAdd" name="txtTaskAdd" required>
            </div>
            <!-- Submit button for the form -->
            <button type="submit">Add Task</button>
        </form>

        <!-- Section heading for displaying the list of tasks -->
        <h2>Here are my Tasks:</h2>

        <!-- Start of the table that will display tasks -->
        <table>
            <!-- title for the table -->
            <caption>List of Tasks</caption>
            <tr>
                <!-- Header cell for the task date column -->
                <th>Task Date</th>
                <!-- Header cell for the task description column -->
                <th>Task</th>
            </tr>

            <?php
                // loop through the database results
                if ($result) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . ($row["taskDate"]) . "</td>";
                        echo "<td>" . ($row["taskAdd"]) . "</td>";
                        echo "</tr>";
                    }
                }
            ?>
        </table>
    </main>

    <?php include "footer.php"; ?>
</body>
</html>
