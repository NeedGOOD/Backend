<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
    $login_delete = $_POST['login-delete'];

    if (is_dir("./{$login_delete}") == $login_delete) {
        rmdir("./{$login_delete}/video/old catalog");
        rmdir("./{$login_delete}/music/new catalog");
        rmdir("./{$login_delete}/video/new catalog");
        rmdir("./{$login_delete}/photo");
        rmdir("./{$login_delete}/music");
        rmdir("./{$login_delete}/video");
        rmdir("./{$login_delete}");
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
    <form action="./delete.php" method="post">
        <table>
            <tr>
                <td>
                    <h1>Create</h1>
                </td>
            </tr>
            <tr>
                <td><label for="login-create">Login:</label></td>
                <td><input type="text" name="login-create" id="login-create"></td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Enter" name="create"></td>
            </tr>
        </table>
    </form>
</body>

</html>