<?php include_once('../utils/init.php');
include_once('../utils/users.php');
include_once('../utils/form.php');

$error1 = '';
if (isset($_GET['key']) && isset($_GET['email'])) {
    $key = $_GET['key'];
    $email = validate_email($_GET['email']);

    if (empty($email))
        $error1 = 'invalid email';
    else if (!($user = get_user_email($email)))
        $error1 = 'Can\'t find user registered with this email';
    else {
        $curDate = date("Y-m-d H:i:s");
        $query = get_reset_pass($key, $email);
        if (!$query) {
            $error1 = "<p><b>Invalid:</b> The link is invalid/expired. Either you did not copy the correct link
from the email, or you have already used the key in which case it is 
deactivated.(<a href='/forgot_password.php'>reset password</a>)</p>";
        } else {
            $expDate = $query['expDate'];
            if ($expDate < $curDate)
                $error1 = "<p><b>The link is expired.</b> You are trying to use the expired link which 
as valid only 24 hours (1 days after request).<br /><br /></p>";
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $password = validate_password($_REQUEST['password']);
    $password2 = validate_password($_REQUEST['password2']);
    $error = '';
    if (empty($password) or empty($password2))
        $error .= 'invalid passwod<br>';
    else if ($password != $password2) {
        $error = 'Password didn\'t match';
    } else {
        update_password(password_hash($password, PASSWORD_DEFAULT), $_SESSION['user']['id']);
        delete_reset_pass($email);
        header("Location: /login.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('../head.php') ?>
    <title>Reset Password - myAASTU</title>
</head>

<body>
    <?php include_once('../nav.php')
    ?>
    <main class="container center">
        <?php if ($error1 != '') { ?>
            <div class="error">
                <h2>Error</h2>
                <p><?= $error1 ?></p>
            </div>
        <?php } else { ?>
            <div class="card form-card">
                <h1>Reset Password</h1>
                <form method="post" autocomplete="off">
                    <input type="password" name="password" placeholder="New passowrd" required>
                    <input type="password" name="password2" placeholder="Repeat new passowrd" required>
                    <input type="submit" class="btn" value="change password">
                </form>
            <?php
            if ($error != '')
                echo "<div class='error'>$error</div>";
        }
            ?>
            </div>
    </main>
    <?php include_once('../footer.php') ?>
</body>

</html>