<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>LOGIN YOUR ACCOUNT | SIMS </title>
    <link href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">

</head>

<body>
    <div class="login">
        <h1>Login</h1>

        <form action="" method="post">


            <label class="textbx username" for="username">
                <i class="fas fa-user"></i>
            </label>
            <input id="username" name="username" placeholder="Username" required type="text">
            <label class="textbx pass" for="password">
                <i class="fas fa-lock"></i>


            </label>
            <input id="password" name="password" placeholder="Password" required type="password"><i class="fas fa-eye-slash toggle-password" onclick="togglePasswordVisibility()"></i>
            <input name="login" type="submit" value="Login">
        </form>
    </div>


    <!-- icon to toggle password visibility -->
    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            var passwordToggleIcon = document.querySelector(".toggle-password");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                passwordToggleIcon.classList.remove("fa-eye-slash");
                passwordToggleIcon.classList.add("fa-eye");
            } else {
                passwordInput.type = "password";
                passwordToggleIcon.classList.remove("fa-eye");
                passwordToggleIcon.classList.add("fa-eye-slash");
            }
        }
    </script>
</body>

</html>
