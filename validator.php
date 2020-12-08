<?php
if (isset($_POST["next"])) {

// echo("ZZZ");

if (empty($_POST["first-name"])) {
    $fnameErr = "First name is required";
} else {
    $fname = test_input($_POST["first-name"]);
    //  echo ($fname . "<br>");
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z0-9-']*$/", $fname)) {
        $fnameErr = "Only letters and numbers allowed";
    }
}

if (empty($_POST["last-name"])) {
    $lnameErr = "Last name is required";
} else {
    $lname = test_input($_POST["last-name"]);
    //    echo ($lname . "<br>");
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z0-9-']*$/", $lname)) {
        $lnameErr = "Only letters and numbers allowed";
    }
}

if (empty($_POST["userid"])) {
    $GLOBALS['$userIDErr'] = "User ID is required";
} else {
    $userID = test_input($_POST["userid"]);
    //   echo ($userID . "<br>");
    // check if name only contains letters and whitespace
    if (!preg_match("/^^[$]([a-zA-z]|_)[A-z0-9]*$/", $userID)) {
        $GLOBALS['$userIDErr'] = "userID must satisfy the naming conventions of PHP variables.";
    }
}

if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
} else {
    $password = test_input($_POST["password"]);
    //  echo ($password . "<br>");
    // check if name only contains letters and whitespace
    if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[{!@#$%^&},])(?=(.*[A-Z]){2,}).{8,}$/", $password)) {
        $passwordErr = "Password must contain at least two uppercase ch, 1 lowercase ch, 1 ch from {!, @, #, $, %, ^, &},
        1 digit and a minimum length of 8 ch";
    } else {
        $passwordValid = true;
    }
}

if (empty($_POST["confirm-password"])) {
    $cPasswordErr = "Password confirmation is required";
} else {
    $cPassword = test_input($_POST["confirm-password"]);
    // echo ($cPassword . "<br>");
    // check if name only contains letters and whitespace
    if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[{!@#$%^&},])(?=(.*[A-Z]){2,}).{8,}$/", $cPassword)) {
        $cPasswordErr = "Password must contain at least two uppercase ch, 1 lowercase ch, 1 ch from {!, @, #, $, %, ^, &},
        1 digit and a minimum length of 8 ch";
    } else {
        $cPasswordValid = true;
    }
}

if ($passwordValid && $cPasswordValid) {
    if ($_POST['password'] != $_POST['confirm-password']) {
        $passwordErr = 'Password should be same.';

    }
}
if (empty($_POST["website"])) {
    $website = "";
} else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
        $websiteErr = "Invalid URL";
    }
}

$_SESSION['result'] = $_POST;
// print_r($_POST);

if ($fnameErr == "" and $lnameErr == "" and $GLOBALS['$userIDErr'] == "" and $passwordErr == "" and $cPasswordErr == "") {

    header("Location: process.php");

}


}

function test_input($data)
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

?>