<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birthday Surprise</title>
</head>
<body>
    <form action="check_password.php" method="post">
        <label for="password">Enter the password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>
<?php
$expected_password = "afrosain";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entered_password = $_POST["password"];

    if ($entered_password == $expected_password) {
        header("Location: birthday_message.html");
        exit();
    } else {
        echo "Incorrect password. Try again.";
    }
}
?>
