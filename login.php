<?php
// typically when working with the session, session start function call should be at the beginning of the page;
// at a minimum, it needs to be before any HTML code
session_start();

// in this PHP code chunk, we will check to see if the form has been submitted
// if so, compare the form inputs to tbluser in the mariadb
// set up a message variable to indicate login success or failure
$message ="";

// check to see if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    // include the database connection file here 
    require_once 'db_connection.php';

    // variable to hold the user name 
    $username = $_POST['txtUserName'];
    // variable to hold the password 
    $password = $_POST['pwdUser'];

    // query the database for a match of the username and password in tbluser
    $sql = "SELECT FirstName, userID FROM tbluser WHERE UserName = '$username' AND Password = '$password' ";

    // run query
    $result = mysqli_query($db_conn, $sql);

    // convert the query results into an array
    $arrUser = mysqli_fetch_array($result);

    // check to see if the user logged in correctly
    if (isset($arrUser)){
        // $message = "Login succeeded";

        // set up a session variable to indicate the user has successfully logged in
        $_SESSION['username'] = $username;

        // add in the redirect to the intranet page
        header("Location: secure.php");
    }
    else{
        // be intentionally vague with login error messages
        // the user might be a bot or hacker - don't give them too much info!
        $message = "Login failed. Please try again.";

        $_SESSION['username'] = "";
    }
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
    <title>Accountability Buddy ~ Login</title>

    <!-- link to the global css file-->
    <link rel="stylesheet" href="main.css">

   <!-- link to the Javascript file with the form validation -->
    <script src="login_validation.js"></script>
</head>

<body> 

    <!-- Header section  -->
    <header>
        <!-- Includes the navigation menu from an external PHP file (menu.php) -->
        <?php include "menu.php"; ?>
        <!-- Main page title displayed at the top of the page -->
        <h1>Accountability Buddy ~ Login</h1>
    </header>

    <!-- Main content section -->
<main>
    <h2 class="login-heading">Enter your Username and Password:</h2>

    <!-- show the user a message indicating login status, centered -->
    <p class="login-message"><?php echo $message; ?></p>


   <form name="frmLogin" id="frmLogin" method="post" action="login.php" onsubmit="return validateForm()">
<div class="login-container">

<!-- user name input -->
<div>
    <label for="txtUserName">User Name:</label>
    <input type="text" id="txtUserName" name="txtUserName" placeholder="your username">
</div>

<!-- password input -->
<div>
    <label for="pwdUser">Password:</label>
    <input type="password" id="pwdUser" name="pwdUser" placeholder="your password">
</div>

<!-- output message from JS -->
<p id="msgOutput" class="center-text"></p>

<!-- the button to create account -->
<div>
    <button type="submit">Create Account</button>
</div>

<!-- the button to submit the form -->
<div>
    <button type="submit">Login</button>
</div>
    </div>
</form>
</form>
    </main>
    <?php include "footer.php"; ?>  
</body>
</html>
