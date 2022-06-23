<?php include("utils/init.php");
include('utils/util.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('head.php') ?>
    <title>Log In - myAASTU</title>
</head>

<body>
    <?php include('nav.php');
    ?>
    <main class="container center">
        <div class="card form-card">
            <h1>Login</h1>
            <div>
                or
                <a href="signup.php" class="secondary-btn">create account</a>
            </div>
            <form method="post" autocomplete="off">
                <input type="text" name="username" value="<?= array_get($_POST, 'username') ?>" placeholder="Username" required>
                <input type="password" name="password" placeholder="Passowrd" required>
                <a href="forgot-password">forgot password?</a>
                <input type="submit" value="Login">
            </form>
            <?php
            include("utils/users.php");
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $username = $_REQUEST['username'];
                $password = $_REQUEST['password'];
                $error = '';
                if (empty($username))
                    $error .= 'Username is required<br>';
                else if (empty($password))
                    $error .= 'Password is required<br>';
                else {
                    $user = get_user($username);

                    if ($user) {
                        if (password_verify($password, $user['password'])) {
                            $_SESSION['user'] = $user;
                            header("Location: /");
                        } else
                            $error .= 'Incorrect password<br>';
                    } else
                        $error .= 'User doesn\'t exist<br>';
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