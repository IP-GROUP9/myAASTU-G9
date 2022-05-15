<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('head.php') ?>
    <title>Log In - myAASTU</title>
</head>
<body>
    <?php include('nav.php') ?>
    <main class="container center">
        <div class="card login">
            <h1>Login</h1>
            <form method="post" autocomplete="off">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Passowrd">
                <input type="submit" value="Login">
            </form>
            <div class="error">
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
                            session_start();
                            $_SESSION['username'] = $user['username'];
                            header("Location: /");
                        } else
                        $error .= 'Incorrect password<br>';
                    } else
                        $error .= 'User doesn\'t exist<br>';
                }
                if ($error != '')
                    echo $error;
            }
            ?>
            </div>
        </div>
    </main>
    <?php include('footer.php') ?>
</body>
</html>