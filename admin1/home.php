<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annapurna</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
    <section class="header">
        <nav>
            <a href="./home.php"><img src="Annapurna.png" alt=""></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="./home.php">HOME</a></li>
                    <li><a href="./about.php">ABOUT</a></li>
                    <li><a href="./donate.php">DONATE</a></li>
                    <li><a href="./request.php">REQUEST</a></li>
                    <li><a href="./volunteer.php">VOLUNTEER</a></li>
                    <li><a href="./contact.php">CONTACT US</a></li>
                    <li><a href="./login.php">SIGNUP</a></li>
                    <li><a href="./logout.php">LOGOUT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()" ></i>
        </nav>
    
        <div class="text-box">
            <h1>HAPPY-TO-HELP</h1>
            <p> Food and love is what makes the world go round.</p>
        </div>

    </section>



    <section class="course">
        <h1>Yes we can !</h1>

        <div class="row">
            <div class="course-col">
                <h3>Donate Food</h3>
                <p>You can donate food and we are here to distribute the food to the ones who have the need for that.</p>
                <button class="hero-btn-black"><a href="./donate.php">Donate</a></button>
            </div>
            <div class="course-col">
                <h3>Volunteer</h3>
                <p>You can contribute by joining our Organisation as a Volenteer to feed helpless people.</p>
                <button class="hero-btn-black"><a href="./volunteer.php">Join Us</a></button>
            </div>
            <div class="course-col">
                <h3>Request Food</h3>
                <p>You can request food, if u can feed some hungry helpless people and you are genuinly a distributer.</p>
                <button class="hero-btn-black"><a href="./request.php">Request</a></button>
            </div>
        </div>
    </section>
    
    <section class="footer">
        <h4>About Us</h4>
        <p>We are a team of thoughtful people ready to help everyone we can</p>
        <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram" aria-hidden="true"></i>
            <i class="fa fa-linkedin-square"></i>
        </div>
        <p>Made with <i class="fa fa-heart"></i> by OPTEAMERS</p>
    </section>

 
<script>
    var navLinks = document.getElementById("navLinks");

    function showMenu(){
        navLinks.style.right = "0"
    }
    function hideMenu(){
        navLinks.style.right = "-200px"
    }
</script>
</body>
</html>