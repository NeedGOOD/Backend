<?php
session_start();
if (isset($_SESSION['authenticated'])) {
    header('Location: welcome.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_name = $_POST['user-name'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $last_name = $_POST['last-name'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $country = $_POST['country'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];

    $dsn = 'mysql:host=localhost;dbname=lab5';
    $pdo = new PDO($dsn, 'root', '');

    // $sql = 'SELECT * FROM users ORDER BY id DESC';
    // $sth = $pdo->query($sql);
    // $users = $sth->fetchAll();

    // $stmt = $pdo->prepare('SELECT * FROM users WHERE user_name = :user_name OR email = :email');
    // $stmt->execute(['user_name' => $user_name, 'email' => $email]);
    // $existingUser = $stmt->fetch(PDO::FETCH_ASSOC);
    // if ($existingUser) {

    $stmt = $pdo->prepare("SELECT * FROM users WHERE login = :login AND password = :password");
    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo 'Username or email already taken';
    } else {
        $sql = "INSERT INTO users (user_name, login, password, last_name, name, surname, country, birthday, email)
            VALUES ('{$user_name}', '{$login}', '{$password}', '{$last_name}', '{$name}', '{$surname}', '{$country}', '{$birthday}', '{$email}')";
        $pdo->query($sql);
        header('Location: welcome.php');
        $lastId = $pdo->lastInsertId();
        $_SESSION['authenticated'] = true;
        $_SESSION['id'] = $lastId;
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="user-name">User name:</label></td>
                <td><input type="text" name="user-name" id="user-name"></td>
            </tr>
            <tr>
                <td><label for="login">Login</label></td>
                <td><input type="text" name="login" id="login"></td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td><label for="last-name">Last name:</label></td>
                <td><input type="text" name="last-name" id="last-name"></td>
            </tr>
            <tr>
                <td><label for="name">Name:</label></td>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td><label for="surname">Surname:</label></td>
                <td><input type="text" name="surname" id="surname"></td>
            </tr>
            <tr>
                <td><label for="country">Country:</label></td>
                <td><input type="text" name="country" id="country"></td>
            </tr>
            <tr>
                <td><label for="birthday">Birthday:</label></td>
                <td><input type="date" name="birthday" id="birthday"></td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="text" name="email" id="email"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="registration"></td>
            </tr>
        </table>
    </form>
</body>

</html>