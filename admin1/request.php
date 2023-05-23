<?php include('./partials/menu.php'); 
?>
<?php include('./config1/constants.php'); ?>

<h1>Request Food</h1>
</section>
<!-----blog page content------>
<section class="blog-content">
    <div class="row">
        <div class="blog-left">
            <!-- <img src="eduford_img/certificate.jpg" alt=""> -->
            <h2>Request Food to Feed Poor Families</h2>
            <p>Annapurna is a service that provides free and nutritious food to the families of underprivileged people. This is especially important for those who come from nearby states for work and are often poor, as their family members may not have time to take care of themselves or even eat, as they focus on working for their loved ones. By offering free meals, Annapurna helps support these families and alleviate some of their stress during a difficult time.</p>
            <br>
            <br>
            <h2>Available Food</h2>
            
            <?php
    // Include the database connection file
    include('config1/constants.php');

    // SQL query to fetch all records from the database
    $sql = "SELECT * FROM `Donate_Food` WHERE `donated` != 'Yes'";
    $result = mysqli_query($conn, $sql);
    $count11= mysqli_num_rows($result);
    $sn=1;
    // Check if there are any records
    if( $count11> 0) {
?>
    <table class="available-food">
        <thead>
            <tr>
                <th>S.No.</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Items</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $sn++; ?></td>
                    <td><?php echo $row['Name']; ?></td>
                    <td><?php echo $row['Phone']; ?></td>
                    <td><?php echo $row['Items']; ?></td>
                    <td><?php echo $row['Address']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php
    } else {
        // No records found
        echo "No records found";
    }

   
?>


            <div class="comment-box">
                <h3>Submit this form to Request Food !</h3>
                <p>Our Team will Contact and Reach you within 1 Hour</p>
                <br>
                <form action="" class="comment-form" method="POST">
                    <p style="color: black; font-weight:400;">Name</p>
                    <input type="text" placeholder="Enter Name" name="d_name">
                    <p style="color: black; font-weight:400;">Phone Number</p>
                    <input type="tel" placeholder="Enter Phone No." name="d_ph">
                    <p style="color: black; font-weight:400;">Serves Required</p>
                    <input name="d_items" type="number" placeholder="Enter how many serves are required"></input>
                    <p style="color: black; font-weight:400;">Address</p>
                    <textarea name="d_address" rows="3" placeholder="Enter Your Address"></textarea>
                    <button type="submit" name="submit" class="hero-btn red-btn">SUBMIT</button>
                </form>
            </div>

        </div>
        <div class="blog-right">
            <h3>Requests Fulfilled</h3>
            <div>
                <span>Kudasan</span>
                <span>
                <?php 
                    $sql2 = "SELECT * FROM `Request_Food` WHERE `Address` LIKE '%Kudasan%';";
                    $res2 = mysqli_query($conn,$sql2);
                    $count2 = mysqli_num_rows($res2);
                    echo $count2;
                ?>
                
                </span>
            </div>
            <div>
                <span>Mehsana</span>
                <span><?php 
                    $sql2 = "SELECT * FROM `Request_Food` WHERE `Address` LIKE '%Mehsana%';";
                    $res2 = mysqli_query($conn,$sql2);
                    $count2 = mysqli_num_rows($res2);
                    echo $count2;
                ?></span>
            </div>
            <div>
                <span>Meera Road</span>
                <span><?php 
                    $sql2 = "SELECT * FROM `Request_Food` WHERE `Address` LIKE '%Meera%';";
                    $res2 = mysqli_query($conn,$sql2);
                    $count2 = mysqli_num_rows($res2);
                    echo $count2;
                ?></span>
            </div>
            <div>
                <span>Gandhinagar</span>
                <span><?php 
                    $sql2 = "SELECT * FROM `Request_Food` WHERE `Address` LIKE '%Gandhinagar%';";
                    $res2 = mysqli_query($conn,$sql2);
                    $count2 = mysqli_num_rows($res2);
                    echo $count2;
                ?></span>
            </div>
            <div>
                <span>Vadodara</span>
                <span><?php 
                    $sql2 = "SELECT * FROM `Request_Food` WHERE `Address` LIKE '%Vadodara%';";
                    $res2 = mysqli_query($conn,$sql2);
                    $count2 = mysqli_num_rows($res2);
                    echo $count2;
                ?></span>
            </div>
            <div>
                <span>Ahemdabad</span>
                <span><?php 
                    $sql2 = "SELECT * FROM `Request_Food` WHERE `Address` LIKE '%Ahemdabad%';";
                    $res2 = mysqli_query($conn,$sql2);
                    $count2 = mysqli_num_rows($res2);
                    echo $count2;
                ?></span>
            </div>
            <div>
                <span>Surat</span>
                <span><?php 
                    $sql2 = "SELECT * FROM `Request_Food` WHERE `Address` LIKE '%Surat%';";
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

    $sql1 = "INSERT INTO `Request_Food` (`Name`, `Phone` , `Food`, `Address`) VALUES ('$d_name' , '$d_ph', '$d_items', '$d_address');";
    $res1 = mysqli_query($conn,$sql1);
    if($res1){
        // Data inserted 
        // echo "Data inserted";
        // Create a session variable to display message
        $_SESSION['add'] = "success";
        // Redirect page
        header("location:".SITEURL.'request.php');
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
            alert("<?php echo ($_SESSION['add'] == 'success') ? 'Request added successfully' : 'Failed to add food items'; ?>");
        </script>
<?php
        unset($_SESSION['add']);
    }
?>