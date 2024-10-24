<?php

session_start();

if (!empty($_SESSION['login'])) {
    header('Location: /register/profile.php');
}

$error = '';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == 'eduard@yandex.ru' && $password == '123456') {
        $_SESSION['login'] = $email;
        header('Location: /register/profile.php');
        die();
    } else {
        $error = 'Неверный логин или пароль';
    }
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello world!</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <br>
    <?= $error ?>
    <div class="container">
        <form action="" method="post">
            <!-- email input -->
            <div class="mb-4 form-outline">
                <input type="email" name="email" id="form1Example1" class="form-control">
                <label class="form-label" for="form1Example1">E-mail address</label>
            </div>
            <!-- password input -->
            <div class="form-outline mb-4">
                <input type="password" name="password" id="form1Example2" class="form-control">
                <label for="form1Example2" class="form-label">Password</label>
            </div>
            <!-- submit button -->
            <button type="submit" class="btn btn-primary btn-block">Sign in</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>