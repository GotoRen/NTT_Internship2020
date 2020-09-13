<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Homemade+Apple rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Signin Page</title>
</head>

<body>

<?php
if( $_POST['username'] == 'mozuku@example.com' && $_POST['password'] == 'password' ){
  echo 'OK';
  header("location: Choose/choose.html");
}
else {
  header("location: Signin/signin.html");
}
?>
</body>
</html>

</body>
</html>