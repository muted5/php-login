<?php
// Send Button
if(isset($_POST['btn-enter'])):
    echo "Clicked";
endif;
?>
<html>
<head>
    <title>Login</title>
    <meta charset="utf-8">
</head>
<body>

<h1> Login </h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
Login: <input type="text" name="login"><br>
Password: <input type="password" name="password"><br>
<button type="submit" name="btn-enter"> Enter </button>
</form>


</body>
</html>
