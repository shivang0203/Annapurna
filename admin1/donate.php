<?php include('./partials/menu.php'); ?>
<?php include('./config1/constants.php'); ?>

<h1>Donate Food</h1>
</section>
<section class="blog-content">
    <div class="row">
        <div class="blog-left">
            <h2>Donate Food for Poor People and their Families</h2>
            <p>Annapurna is a service that provides free and nutritious food to the families of underprivileged people. This is especially important for those who come from nearby states for work and are often poor, as their family members may not have time to take care of themselves or even eat, as they focus on working for their loved ones. By offering free meals, Annapurna helps support these families and alleviate some of their stress during a difficult time.</p>

            <div class="comment-box">
                <h3>Submit this form to Donate Food !</h3>
                <p>Our Team will Contact and Reach you within 1 Hour</p>
                <br>
                <form action="" method = Post class="comment-form">
                    <p style="color: black; font-weight:400;">Name
                        <input type="text" name="d_name" placeholder="Enter Name">
                    </p>
                    <p style="color: black; font-weight:400;">Phone Number
                        <input type="tel" name="d_ph" placeholder="Enter Phone No.">
                    </p>
                    <p style="color: black; font-weight:400;">Food Items & Quantity
                        <textarea name="d_items" rows="3" placeholder="Food Items you want to Donate"></textarea>
                    </p>
                    <p style="color: black; font-weight:400;">Number of Serves
                        <input type="number" name="d_serves" placeholder="Enter Number of Serves">
                    </p>
                    <p style="color: black; font-weight:400;">Address
                        <textarea name="d_address" rows="3" placeholder="Enter Your Address"></textarea>
                    </p>
                    <button type="submit" name="submit" class="hero-btn red-btn">SUBMIT</button>
                </form>
            </div>

        </div>
        <div class="blog-right">
            <h3>Past Donations</h3>
            <div>
                <span>Kudasan</span>
                <span>
                <?php 
                    $sql2 = "SELECT * FROM `Donate_Food` WHERE `Address` LIKE '%Kudasan%';";
                    $res2 = mysqli_query($conn,$sql2);
                    $count2 = mysqli_num_rows($res2);
                    echo $count2;
                ?>
                
                </span>
            </div>
            <div>
                <span>Mehsana</span>
                <span><?php 
                    $sql2 = "SELECT * FROM `Donate_Food` WHERE `Address` LIKE '%Mehsana%';";
                    $res2 = mysqli_query($conn,$sql2);
                    $count2 = mysqli_num_rows($res2);
                    echo $count2;
                ?></span>
            </div>
            <div>
                <span>Meera Road</span>
                <span><?php 
                    $sql2 = "SELECT * FROM `Donate_Food` WHERE `Address` LIKE '%Meera%';";
                    $res2 = mysqli_query($conn,$sql2);
                    $count2 = mysqli_num_rows($res2);
                    echo $count2;
                ?></span>
            </div>
            <div>
                <span>Gandhinagar</span>
                <span><?php 
                    $sql2 = "SELECT * FROM `Donate_Food` WHERE `Address` LIKE '%Gandhinagar%';";
                    $res2 = mysqli_query($conn,$sql2);
                    $count2 = mysqli_num_rows($res2);
                    echo $count2;
                ?></span>
            </div>
            <div>
                <span>Vadodara</span>
                <span><?php 
                    $sql2 = "SELECT * FROM `Donate_Food` WHERE `Address` LIKE '%Vadodara%';";
                    $res2 = mysqli_query($conn,$sql2);
                    $count2 = mysqli_num_rows($res2);
                    echo $count2;
                ?></span>
            </div>
            <div>
                <span>Ahemdabad</span>
                <span><?php 
                    $sql2 = "SELECT * FROM `Donate_Food` WHERE `Address` LIKE '%Ahemdabad%';";
                    $res2 = mysqli_query($conn,$sql2);
                    $count2 = mysqli_num_rows($res2);
                    echo $count2;
                ?></span>
            </div>
            <div>
                <span>Surat</span>
                <span><?php 
                    $sql2 = "SELECT * FROM `Donate_Food` WHERE `Address` LIKE '%Surat%';";
                    $res2 = mysqli_query($conn,$sql2);
                    $count2 = mysqli_num_rows($res2);
                    echo $count2;
                ?></span>
            </div>


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
    $d_name = $_POST['d_name'];
    $d_ph = $_POST['d_ph'];
    $d_items = $_POST['d_items'];
    $d_address = $_POST['d_address'];
    $d_serves = $_POST['d_serves'];

    $sql1 = "INSERT INTO `Donate_Food` (`Name`, `Phone` , `Items`, `Serves`, `Address`) VALUES ('$d_name' , '$d_ph', '$d_items','$d_serves', '$d_address');";
    $res1 = mysqli_query($conn,$sql1);
    if($res1){
        // Data inserted 
        // echo "Data inserted";
        // Create a session variable to display message
        $_SESSION['add'] = "success";
        // Redirect page
        header("location:".SITEURL.'donate.php');
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
            alert("<?php echo ($_SESSION['add'] == 'success') ? 'Food items added successfully' : 'Failed to add food items'; ?>");
        </script>
<?php
        unset($_SESSION['add']);
    }
?>

