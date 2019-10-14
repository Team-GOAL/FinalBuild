//toggle sign up tab
$('body').on('click', '.signup-tab', function (e) {
    $('#login-panel').hide();
    $('#signup-panel').show();
});

//toggle login tab
$('body').on('click', '.login-tab', function (e) {
    $('#login-panel').show();
    $('#signup-panel').hide();
});

//When sign up submit button is clicked
$('body').on('click', '.signupButton', function (e) {
    e.preventDefault();
    if ($('#signup-pass-1').val() != $('#signup-pass-2').val()) {
        //TODO show error message
        alert("Passwords do not match!")
    } else {
        signUp();
    }
});

//When login submit button is clicked
$('body').on('click', '.loginButton', function (e) {
    e.preventDefault();
    if ($('#login-pass').val() ==="") {
        //TODO show error message
        alert("Password is requried")
    } if ($('#login-email').val() ==="") {
        //TODO show error message
        alert("Email is requried")
    }
    else {
        logIn();
    }
});

//When log out button is clicked
$('body').on('click', '.logOutButton', function (e) {
    e.preventDefault();
    //TODO Clear the local storage / session
    // hide the log out button
    showLoginButton();
});

function signUp() {
    $.ajax({
        url: "php/insert-user.php",
        type: "POST",
        data: $('#signupForm').serialize(),
        success: function (data) { // Pop the location data on map
            // if data is empty, show feedback to the user
            if (data === "") {
                //TODO update validation
                $('#notFound').html("We have not found any result.");
            }
            //TODO change to display text
            alert("You have successfully signed up.");
            $('#loginModalForm').modal('hide');
            showLogoutButton();
        },
        error: function (jqxhr, status, exception) {
            alert(JSON.stringify(jqxhr));
            alert(status);
            alert(exception);
        }
    });
}

function logIn() {
    $.ajax({
        url: "php/login-user.php",
        type: "POST",
        data: $('#loginForm').serialize(),
        success: function (data) { // Pop the location data on map
            // if data is empty, show feedback to the user
            if (data === "") {
                //TODO update validation
                alert("Invalid email or the password. Please try again.");
            }
            //TODO change to display text
            alert("You have successfully logged in.");
            $('#loginModalForm').modal('hide');
            showLogoutButton();
        },
        error: function (jqxhr, status, exception) {
            //alert(JSON.stringify(jqxhr));
            //alert(status);
            //alert(exception);
        }
    });
}

function showLogoutButton() {
    $('#launchLoginButton').hide();
    $('#logOutButton').show();
}

function showLoginButton() {
    $('#launchLoginButton').show();
    $('#logOutButton').hide();
}

