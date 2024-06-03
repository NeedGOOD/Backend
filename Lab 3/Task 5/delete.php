<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create'])) {
    $login_create = $_POST['login-create'];

    if (!empty($login_create)) {
        mkdir("./{$login_create}");
        mkdir("./{$login_create}/video");
        mkdir("./{$login_create}/music");
        mkdir("./{$login_create}/photo");
        mkdir("./{$login_create}/video/new catalog");
        mkdir("./{$login_create}/music/new catalog");
        mkdir("./{$login_create}/video/old catalog");
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
    <form action="./index.php" method="post">
        <table>
            <tr>
                <td>
                    <h1>Delete</h1>
                </td>
            </tr>
            <tr>
                <td><label for="login-delete">Login:</label></td>
                <td><input type="text" name="login-delete" id="login-delete"></td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="delete?" name="delete"></td>
            </tr>
        </table>
    </form>
</body>

</html>