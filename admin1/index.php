<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function validateForm() {
            var username = document.forms["signup"]["username"].value;
            var email = document.forms["signup"]["email"].value;
            var password = document.forms["signup"]["password"].value;
            var confirmPassword = document.forms["signup"]["confirm-password"].value;
            var phone = document.forms["signup"]["phone"].value;


            if (username == "" || email == "" || password == "" || confirmPassword == "") {
                alert("All fields must be filled out");
                return false;
            }
            var emailRegex = /\S+@\S+\.\S/;
            if (!emailRegex.test(email)) {
                alert("Please enter a valid email address");
                return false;
            }

            var phoneRegex = /^\d{10}$/;
            if (!phoneRegex.test(phone)) {
                alert("Please enter a valid 10-digit phone number");
                return false;
            }
            if (password != confirmPassword) {
                alert("Passwords do not match");
                return false;
            }
        }
    </script>
</head>

<body>
    <section class="header">
        <nav>
            <a href="#"><img src="./Annapurna.png" alt=""></a>
        </nav>
        <br><br><br>
        <div class="login">

            <form action="welcome.php" method = "post" name="signup" onsubmit="return validateForm()" style="margin-left: 300px; margin-right: 300px; border:1px solid #ccc; border-radius: 10px; background-color: rgba(110, 125, 129, 0.235); box-shadow: 10px whitesmoke">
                <div style="margin: 20px; margin-right: 40px;" class="container">
                    <h1 style="color: white">Login</h1>
                    <br>
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" style="color: white; font-size:larger "><br>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" style="color: white; font-size:larger"><br><br>
                    <input type="submit" value="Login" name = "login" style="color: white; font-size:larger">
                </div>
            </form>
        </div>
    </section>
</body>
</html>