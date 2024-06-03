<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['login'] === 'Admin' && $_POST['password'] === 'password') {
        $_SESSION['is_logged'] = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (empty($_SESSION['is_logged'])): ?>
        <form action="" method="post">
            <table>
                <tr>
                    <td><label for="login">Login:</label></td>
                    <td><input type="text" name="login" id="login"></td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" name="password" id="password"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Enter"></td>
                </tr>
            </table>
        </form>
    <?php else: ?>
        <div>Good afternoon, Admin!</div>
    <?php endif; ?>
</body>

</html>