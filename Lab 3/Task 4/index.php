<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['photo'])) {
        $upload_dir = './photos/';
        move_uploaded_file($_FILES['photo']['tmp_name'], $upload_dir . $_FILES['photo']['name']);
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
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="photo">Photo:</label></td>
                <td><input type="file" accept="image/jpeg, image/png" name="photo" id="photo"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Enter"></td>
            </tr>
        </table>
    </form>
</body>

</html>