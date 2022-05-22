<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('head.php') ?>
    <title>Rest Password - myAASTU</title>
</head>
<body>
    <?php include('nav.php') ?>
    <main class="container center">
        <div class="card form-card">
            <h1>Reset Password</h1>
            <form method="post" autocomplete="off">
                <input type="password" name="password" placeholder="Passowrd" required>
                <input type="password" name="password2" placeholder="Passowrd" required>
                <input type="submit" value="change password">
            </form>
                <?php
                include("utils/users.php");
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $password = $_REQUEST['password'];
                    $password2 = $_REQUEST['password2'];
                    $error = '';
                    if (empty($password) or empty($password2))
                        $error .= 'Password is required<br>';
                    else if ($password != $password2) {
                        $error = 'Password didn\'t match';
                    } else {
                        update_password(password_hash($password, PASSWORD_DEFAULT), $_SESSION['user']['id']);
                        header("Location: /");
                    }
                    if ($error != '')
                        echo "<div class='error'>$error</div>";
                }
                ?>
        </div>
    </main>
    <?php include('footer.php') ?>
</body>

</html>