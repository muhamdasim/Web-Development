<html>
<head>
<title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="input-validation-form.js"></script>

<body>
    <div class="loginbox">
    <img src="avatar.png" class="avatar">
        <h1>Portal Login</h1>
        <form name="login" action="login.php" onsubmit="return validateForm()" method="post" required>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit"value="Login">
            <a href="#">Lost your password?</a><br>
            <a href="#">Don't have an account?</a>
        </form>
        
    </div>

</body>
</head>
</html>