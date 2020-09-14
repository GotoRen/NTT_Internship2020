<?php


if($_POST['username'] == 'mozuku@example.com' && $_POST['password'] == 'password'){
    echo 'OK';
    header("location: Choose/choose.html");
} else {
    echo 'NG';
    header("location: Signin/signin.html");
}


?>
