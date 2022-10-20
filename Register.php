<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale=1">
    <title>Login and Registration Form</title>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="login and registration.css">
</head>

<body>
    <div class="main">
        <div class="card">
            <div class="cardtitle">
                <h3><i class="fa fa-user-circle"></i>User <span id="actiontitle">Login</span></h3>
            </div>
            <div class="cardbody">
                <div class="cardbodytop">
                    <button id="login" class="button" onclick="loginbutton()">Login</button>
                    <button id="register" class="button" onclick="registerbutton()">Register</button>
                    <div id="bottomline"></div>
                </div>
                <div class="cardbodybottom">
                    <form id="loginform" action="bakery.html" method="POST">
                        <br>
                        <input type="email" name="email" class="input-field" required="" placeholder="Enter your email"><br><br>
                        <input type="password" name="password" class="input-field" required="" placeholder="Enter your password"><br><br>
                        <br>
                        <input type="submit" name="submit" class="submit-field" value="Login">
                    </form>

                    <form action="signup.php" method="POST" id="registerform">
                        <input type="text" name="username" class="input-field" required="" placeholder="Enter your name"><br><br>
                        <input type="email" name="email" class="input-field" required="" placeholder="Enter your email"><br><br>
                        <input type="password" name="password" class="input-field" required="" placeholder="Enter your password"><br><br>
                        <br>
                        <input type="submit" name="submit" class="submit-field" value="Register">
                    </form>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var a = document.getElementById('loginform');
        var b = document.getElementById('registerform');
        var c = document.getElementById('bottomline');
        var d = document.getElementById('login');
        var e = document.getElementById('register');
        var span = document.getElementById('actiontitle');

        function registerbutton() {
            a.style.left = "-450px";
            b.style.right = "30px";
            c.style.left = "215px";
            d.style.color = "#000";
            e.style.color = "#000";
            span.textContent = "register";
        }


        function loginbutton() {
            a.style.left = "30px";
            b.style.right = "450px";
            c.style.left = "30px";
            d.style.color = "#000";
            e.style.color = "#000";
            span.textContent = "login";
        }
        
    </script>
</body>

</html>