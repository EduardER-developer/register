<?php 
session_start();
if (empty($_SESSION['login'])){
    header('Location: /register/index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <br>
    <div class="container">
        Username: <?= htmlspecialchars($_SESSION['login']) ?><br>

        <a href="/register/logout.php">Выйти</a>
    </div>
</body>
</html>