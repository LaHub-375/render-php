<?php
session_start();
$username = "user";
$password = "password";
$error = "";

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header("Location: loginsuccess.php");
    exit;
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] == $username && $_POST['password'] == $password) {
        $_SESSION['loggedin'] = true;
        header("Location: loginsuccess.php");
        exit;
    } else {
        $error = "Username or password is incorrect";
    }
}
?>
<!DOCTYPE html>
<html>
<body>
<h3>Creating a login Page</h3>
<?php if ($error) echo "<p>$error</p>"; ?>
<form method="post" action="index.php">
    username:<br>
    <input type="text" name="username"><br>
    password:<br>
    <input type="password" name="password"><br>
    <input type="submit" value="login">
</form>
</body>
</html>
