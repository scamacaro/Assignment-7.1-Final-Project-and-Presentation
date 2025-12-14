// Validate the Invite Friends form
function validateInviteForm() {
    let form = document.frmInvite;
    let friendName = form.txtFriendName.value.trim();
    let friendEmail = form.txtFriendEmail.value.trim();
    let messageToFriend = form.txtMessageToFriend.value.trim();

    // Shortcut to the message div
    let message = document.getElementById("divMessage");

    // Validation: Friend's Name
    if (friendName.length === 0) {
        message.textContent = "Please enter your friend's full name.";
        return false;
    }

    // Validation: Friend's Email
    if (friendEmail.length === 0 || !friendEmail.includes("@")) {
        message.textContent = "Please enter a valid email address.";
        return false;
    }

    // Validation: Message
    if (messageToFriend.length === 0) {
        message.textContent = "Please enter a personal message to your friend.";
        return false;
    }

    // If we get here, the form submission was successful
    alert("Invitation sent successfully!");
    return true;
}
