<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('head.php') ?>
    <title>Sign Up - myAASTU</title>
</head>
<body>
    <?php include('nav.php') ?>
    <main class="container center">
        <div class="card login">
            <h1>Sign Up</h1>
            <form method="post" autocomplete="off">
                <input type="text" name="username" placeholder="Username">
                <input type="text" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Passowrd">
                <input type="submit" value="Sign Up">
            </form>
            <div class="error">
            <?php
            include("utils/users.php");
            $SECRET = "super secure string";
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $username = $_REQUEST['username'];
                $password = $_REQUEST['password'];
                
                $email = $_REQUEST['email'];
                $error = '';
                if (empty($username))
                    $error .= 'Username is required<br>';
                else if (empty($password))
                    $error .= 'Password is required<br>';
                else if (empty($email))
                    $error .= 'Email is required<br>';
                else {
                    $user = get_user($username);
                    if (!$user) {
                        $password = password_hash($password, PASSWORD_DEFAULT);
                        create_user($username, $email, $password);
                        header("Location: /login.php");
                        exit;
                    } else {
                        $error .= 'Username already exists<br>';
                    }
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