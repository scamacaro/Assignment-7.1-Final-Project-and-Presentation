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
    <title>Accountability Buddy ~ Invite Friends</title>

    <!-- link to the global css file -->
    <link rel="stylesheet" href="main.css">

    <!-- link to the Javascript file with the form validation -->
    <script src="index.js"></script>
</head>
<body>
    <!-- Header section  -->
    <header>
        <!-- Includes the navigation menu from an external PHP file (menu.php) -->
        <?php include "menu.php"; ?>
        <!-- Main page title displayed at the top of the page -->
        <h1>Accountability Buddy ~ Invite Friends</h1>
    </header>

    <!-- Main content section -->
    <main>
        <h2>Invite your friends to join Accountability Buddy and stay on track together!</h2>

        <!-- Div for displaying validation messages -->
        <div id="divMessage" class="error"></div>

        <!-- Invite Friends Form -->
        <form method="post" id="frmInvite" name="frmInvite" action="send_invite.php" onsubmit="return validateInviteForm();">

            <!-- Friend's Full Name -->
            <div>
                <label for="txtFriendName">Friend's Full Name:</label>
                <input type="text" id="txtFriendName" name="txtFriendName" placeholder="Friend's Full Name">
            </div>

            <!-- Friend's Email -->
            <div>
                <label for="txtFriendEmail">Friend's Email:</label>
                <input type="text" id="txtFriendEmail" name="txtFriendEmail" placeholder="Friend's Email">
            </div>

            <!-- Message to Friend -->
            <div>
                <label for="txtMessageToFriend">Personal Message:</label><br>
                <textarea id="txtMessageToFriend" name="txtMessageToFriend" rows="4" cols="40" placeholder="Write a short message inviting your friend..."></textarea>
            </div>

            <!-- Submit button -->
            <input type="submit" value="Send Invitation">
        </form>
    </main>
    <?php include "footer.php"; ?>
</body>
</html>
