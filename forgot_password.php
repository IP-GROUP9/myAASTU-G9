<?php include_once('utils/init.php');
include_once('utils/users.php');
include_once('utils/form.php');
include_once('utils/mail.php');

$error = '';
$user = null;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = validate_email($_POST['email']);
    if (empty($email))
        $error = 'Invalid email';
    else if (!($user = get_user_email($email)))
        $error = 'Can\'t find user associated with email.';
    else {
        $time = time() + 24 * 60 * 60;
        $expDate = date("Y-m-d H:i:s", $time);
        $key = md5(2418 * 2 . $email);
        $addKey = substr(md5(uniqid(rand(), 1)), 3, 10);
        $key = $key . $addKey;
        insert_pass_reset($email, $key, $expDate);
        $reset_link = "http://localhost:5000/auth/reset_pass.php?key=$key&email=$email";
        if (send_mail('Reset Password - myAASTU', $email, $user['username'], $reset_link))
            header('Location: /auth/email_sent.php');
        else
            $error = 'Unable to send email. please try again';
    }
}   

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('head.php') ?>
    <title>Reset Password - myAASTU</title>
</head>

<body>
    <?php include_once('nav.php') ?>
    <main class="container center">
        <div class="card form-card">
            <h1>Reset Password</h1>
            <form method="post" autocomplete="off">
                <input type="email" name="email" placeholder="example@xxxx.com" required>
                <input type="submit" class="btn" value="Send email">
            </form>
            <?php
            if ($error != '')
                echo "<div class='error'>$error</div>";
            ?>
        </div>
    </main>
    <?php include_once('footer.php') ?>
</body>

</html>