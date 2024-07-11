<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['change'])) {
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

    // Підготовка запиту на оновлення
    $sql = "UPDATE users SET user_name = :user_name,
    login = :login,
    password = :password,
    last_name = :last_name,
    name = :name,
    surname = :surname,
    country = :country,
    birthday = :birthday,
    email = :email
    WHERE id = :id";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':user_name', $user_name);
    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':last_name', $last_name);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':surname', $surname);
    $stmt->bindParam(':country', $country);
    $stmt->bindParam(':birthday', $birthday);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':id', $_SESSION['id'], PDO::PARAM_INT);

    // Виконання запиту з передачею даних
    $stmt->execute([
        'user_name' => $user_name,
        'login' => $login,
        'password' => $password,
        'last_name' => $last_name,
        'name' => $name,
        'surname' => $surname,
        'country' => $country,
        'birthday' => $birthday,
        'email' => $email,
        'id' => $_SESSION['id']
    ]);
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
    <h1>Welcome!</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="user-name">User name:</label></td>
                <td><input type="text" name="user-name" id="user-name"></td>
            </tr>
            <tr>
                <td><label for="login">Login:</label></td>
                <td><input type="text" name="login" id="login"></td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td><label for="last-name">Last name:</label></td>
                <td><input type="tel" name="last-name" id="last-name"></td>
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
                <td><input type="submit" value="change" name="change"></td>
            </tr>
        </table>
    </form>
    <form action="./log_out.php" method="post">
        <button name="loguot">loguot</button>
    </form>
    <form action="./delete_user.php" method="post">
        <button name="delete_user">delete</button>
    </form>
</body>

</html>