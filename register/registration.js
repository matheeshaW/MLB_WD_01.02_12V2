
function validatePassword() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;

        if (password !== confirmPassword) {
            alert("Password and Confirm Password do not match.");
            return false; // Prevent form submission
        }
		return true; // Allow form submission
}

// Function to display a confirmation box when the user clicks on the submit button
function confirmSubmission() {
    var confirmation = confirm("Are you sure you want to submit?");
    return confirmation;
}

//  event listener for the submit button
document.addEventListener("DOMContentLoaded", function()
    {
    var submitButton = document.querySelector("button[type='submit']");
    submitButton.addEventListener("click", function(event) 
    {
        if (!confirmSubmission())
         {
            event.preventDefault(); // Prevent form submission if user cancels
        }
    });
});