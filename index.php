<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h1>Login form with session</h1>
<div class="loginBox">
    <h3>Login form</h3>
    <br><br>
    <form method="post" action="login.php">
        <label>username</label>
        <input type="text" name="username" placeholder="username"><br><br>

        <label>password</label>
        <input type="text" name="password" placeholder="password"><br><br>

        <input type="submit" name="submit" value="login">



    </form>
    <div class="error">
        <?php //echo $error;?><?php //echo $username; echo $password;?>

    </div>

</div>

</body>
</html>