<?php include('./partials/menu.php'); ?>
<?php include('./config1/constants.php'); ?>


        <h1>Contact Us</h1>
    </section>
    <!-----Contact Us------>
    <section class="location">
        <iframe src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Raj labdhi heritage d&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>

    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fa fa-home"></i>
                    <span>
                        <h5>Annapurna Organisation, Raj Labdhi Heritage</h5>
                        <p>Gandhinagar, Gujarat, IN</p>
                    </span>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <span>
                        <h5>+91 7224963855</h5>
                        <p>Monday To Saturday, 10AM to 6PM</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-envelope-open"></i>
                    <span>
                        <h5>shivangbhargava01@gmail.com</h5>
                        <p>Email us your query.</p>
                    </span>
                </div>
            </div>

            <div class="contact-col">
                <form method="post">
                    <input type="text" name="name" placeholder="Enter Your Name" required>
                    <input type="email" name="email" placeholder="Enter Email address" required>
                    <input type="text" name="subject" placeholder="Subject" required>
                    <textarea rows="8" name="message" placeholder="Message" required></textarea>
                    <button type="submit" name="submit" class="hero-btn red-btn">SUBMIT</button>
                </form>

            </div>
        </div>
    </section>


    <!------Footer------->
    <?php include('./partials/footer.php'); ?>

    <?php

if(isset($_POST['submit'])){
    // Button clicked
    // echo "Button Clicked";

    // Get the data from form
    $new_name = $_POST['name'];
    $new_subject = $_POST['subject'];
    $new_email = $_POST['email'];
    $new_message = $_POST['message'];

    $sql = "INSERT INTO `ContactUs` (`Name`, `Gmail` , `Subject`, `Message`) VALUES ('$new_name' , '$new_email', '$new_subject', '$new_message');";
    $res = mysqli_query($conn,$sql);
    if($res){
        // Data inserted 
        // echo "Data inserted";
        // Create a session variable to display message
        $_SESSION['add'] = "success";
        // Redirect page
        header("location:".SITEURL.'contact.php');
    }
    else{
        // Failed to insert data
        $_SESSION['add'] = "<div class=\"error\">Failed to add admin</div>";
        // Redirect page to add admin
        // header("location:".SITEURL.'admin1/add_admin.php');
    }
}
?>

<?php
    if(isset($_SESSION['add'])){
        $class = ($_SESSION['add'] == 'success') ? 'success' : 'error';
?>
        <script>
            alert("<?php echo ($_SESSION['add'] == 'success') ? 'We will contact you shortly' : 'Failed to Log In'; ?>");
        </script>
<?php
        unset($_SESSION['add']);
    }
?>