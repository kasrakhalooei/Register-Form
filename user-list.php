<?php
$users = [];
if (file_exists('users.json')) {
    $users = json_decode(file_get_contents('users.json'), true);
}
?>

<!DOCTYPE html>
<html lang="fa">
    <head>
        <title>user list</title>
        <link rel="stylesheet" href="assest/css/User-list-style.css">
    </head>
    <body>
    <table>
        <thead>
        <tr>
            <th>نام کاربری</th>
            <th>ایمیل</th>
            <th>رمز عبور</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= ($user['username']) ?></td>
                <td><?= ($user['email']) ?></td>
                <td><?= ($user['password']) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    </body>
</html>
