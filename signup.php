<?php include('utils/init.php');
include('utils/util.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('head.php') ?>
    <title>Sign Up - myAASTU</title>
</head>

<body>
    <?php
    include('nav.php');
    ?>
    <main class="container center">
        <div class="card form-card">
            <h1>Sign Up</h1>
            <div>
                or
                <a href="login.php" class="secondary-btn">already have account?</a>
            </div>
            <form method="post" autocomplete="off" enctype="multipart/form-data">
                <input type="text" value="<?= array_get($_POST, 'username') ?>" name="username" placeholder="Username" required>
                <input type="text" value="<?= array_get($_POST, 'email') ?>" name="email" placeholder="Email" required>
                <input type="password" name="password" minlength="8" placeholder="Passowrd" required>
                <input type="hidden" name="MAX_FILE_SIZE" value="1200000"> <!-- max size 1.5 MB -->
                <label class="upload-label">
                    <input type="file" class="upload-button" name="profile_pic" accept="image/*"/>
                        ⤒ 🗃 upload profile picture
                </label>

                <!-- <label for="profile_pic" class="upload-label">
                    <input type="file" name="profile_pic" accept="image/*">
                </label> -->
                <input type="submit" value="Sign Up">
            </form>
            <?php
            include("utils/users.php");
            include("utils/form.php");
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $error = '';
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $profile_pic = $_FILES['profile_pic'];
                if (empty($username))
                    $error .= 'Username is required<br>';
                else if (empty($password))
                    $error .= 'Password is required<br>';
                else if (!validate_password($password))
                    $error .= 'Password must be at least 8 characters long<br>';
                else if (empty($email))
                    $error .= 'Email is required<br>';
                else if (!validate_email($email))
                    $error .= 'Invalid email format<br>';
                else {
                    $user = get_user($username);
                    if (!$user) {
                        $file = null;
                        if ($profile_pic['name'] != '') {
                            $file = 'images/profile/' . basename($profile_pic['name']);
                            if (!move_uploaded_file($profile_pic['tmp_name'], $file))
                                $error .= 'unable to upload file<br>';
                        }
                        $password = password_hash($password, PASSWORD_DEFAULT);
                        if ($error == '') {
                            create_user($username, $email, $password, $file);
                            header("Location: /login.php");
                            exit;
                        }
                    } else
                        $error .= 'Username already exists<br>';
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