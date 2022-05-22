<?php
function validate_input($input)
{
    return htmlspecialchars(trim($input));
}

function validate_email($email) {
    $email = validate_input($email);
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validate_password($pass) {
    if (strlen($pass) < 8)
        return false;
    return $pass;
}
