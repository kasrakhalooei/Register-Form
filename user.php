<?php
if (!empty($_POST['username'])) {
    echo json_encode([
        'success' => '12',
        'massage' => 'شما با موفقیت وارد شدید',
        'status' => '200'
    ]);
} else {
    echo json_encode([
        'success' => '25',
        'massage' => 'نام کاربری یا رمز عبور اشتباه است',
        'status' => '200'
    ]);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = [
        'username' => $name,
        'email' => $email,
        'password'=>$password
    ];
    $users = [];
    if (file_exists('users.json')) {
        $users = json_decode(file_get_contents('users.json'), true);
    }
    $users[] = $user;
    file_put_contents('users.json', json_encode($users));
}
?>


