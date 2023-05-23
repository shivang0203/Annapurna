<?php include('./partials/menu.php'); ?>
<?php include('./config1/constants.php'); ?>



<h1>Be a Volunteer</h1>
</section>
<!-----blog page content------>
<section class="blog-content">
    <div class="row">
        <div class="blog-left">
            <!-- <img src="eduford_img/certificate.jpg" alt=""> -->
            <h2>Join Us to Feed Poor Families</h2>
            <p>Annapurna is a service that provides free and nutritious food to the families of underprivileged people. This is especially important for those who come from nearby states for work and are often poor, as their family members may not have time to take care of themselves or even eat, as they focus on working for their loved ones. By offering free meals, Annapurna helps support these families and alleviate some of their stress during a difficult time.</p>
            <br>


            <div class="comment-box">
                <h3>Submit this form to Became a Volunteer !</h3>
                <p>Our Team will Contact you within 1 Day</p>
                <br><br>
                <form method= Post class="comment-form" enctype="multipart/form-data">
                    <p style="color: black; font-weight:400;">Name</p>
                    <input type="text" placeholder="Enter Name" name="d_name">
                    <p style="color: black; font-weight:400;">Phone Number</p>
                    <input type="tel" placeholder="Enter Phone No." name="d_ph">
                    <p style="color: black; font-weight:400;">Email</p>
                    <input type="email" placeholder="Enter Email" name="d_gmail">
                    <p style="color: black; font-weight:400;">Select ID
                        <br>
                        <select name="id_type" id="id_type" required >
                            <option value="">--Select an Id type--</option>
                            <option value="visa">Aadhar Card</option>
                            <option value="rupay">PAN Card</option>
                            <option value="mastercard">Driving Licence</option>
                        </select>
                    </p>
                    <br>
                    <p style="color: black; font-weight:400;">ID Proof</p>
                    <input type="file" placeholder="Enter Selected I'd Number" name="image"> 
                    <p style="color: black; font-weight:400;">Address</p>
                    <textarea name="d_address" id="" rows="3" placeholder="Enter Your Address"></textarea>
                    <button type="submit" name="submit" class="hero-btn red-btn">SUBMIT</button>
                </form>
            </div>

        </div>
        <div class="blog-right">
            <h3>Our Volunteers</h3>

            <div>
                <span>Kudasan</span>
                <span>
                <?php 
                    $sql2 = "SELECT * FROM `Volunteer` WHERE `Address` LIKE '%Kudasan%';";
                    $res2 = mysqli_query($conn,$sql2);
                    $count2 = mysqli_num_rows($res2);
                    echo $count2;
                ?>
                
                </span>
            </div>
            <div>
                <span>Mehsana</span>
                <span><?php 
                    $sql2 = "SELECT * FROM `Volunteer` WHERE `Address` LIKE '%Mehsana%';";
                    $res2 = mysqli_query($conn,$sql2);
                    $count2 = mysqli_num_rows($res2);
                    echo $count2;
                ?></span>
            </div>
            <div>
                <span>Meera Road</span>
                <span><?php 
                    $sql2 = "SELECT * FROM `Volunteer` WHERE `Address` LIKE '%Meera%';";
                    $res2 = mysqli_query($conn,$sql2);
                    $count2 = mysqli_num_rows($res2);
                    echo $count2;
                ?></span>
            </div>
            <div>
                <span>Gandhinagar</span>
                <span><?php 
                    $sql2 = "SELECT * FROM `Volunteer` WHERE `Address` LIKE '%Gandhinagar%';";
                    $res2 = mysqli_query($conn,$sql2);
                    $count2 = mysqli_num_rows($res2);
                    echo $count2;
                ?></span>
            </div>
            <div>
                <span>Vadodara</span>
                <span><?php 
                    $sql2 = "SELECT * FROM `Volunteer` WHERE `Address` LIKE '%Vadodara%';";
                    $res2 = mysqli_query($conn,$sql2);
                    $count2 = mysqli_num_rows($res2);
                    echo $count2;
                ?></span>
            </div>
            <div>
                <span>Ahemdabad</span>
                <span><?php 
                    $sql2 = "SELECT * FROM `Volunteer` WHERE `Address` LIKE '%Ahemdabad%';";
                    $res2 = mysqli_query($conn,$sql2);
                    $count2 = mysqli_num_rows($res2);
                    echo $count2;
                ?></span>
            </div>
            <div>
                <span>Surat</span>
                <span><?php 
                    $sql2 = "SELECT * FROM `Volunteer` WHERE `Address` LIKE '%Surat%';";
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
    $d_gmail = $_POST['d_gmail'];
    $id_type = $_POST['id_type'];
    $d_address = $_POST['d_address'];

    // if(isset($_FILES['image']['name'])){
    //     // upload the image
    //     // to upload image we need image name, source path,destination path
    //     $image_name = $_FILES['image']['name'];

    //     // upload the image only if image is selected
    //     if($image_name != ""){

        

    //         // auto raname our image
    //         //  get the extension of our image(eg .jpg, .jpeg, .png) eg. "food1.jpg"
    //         $ext = end(explode('.',$image_name));
    //         $image_name = "Volunteer_".rand(000,999).'.'.$ext; // "Food_Category_738.jpg"

    //         $source_path = $_FILES['image']['tmp_name'];
    //         $dest_path = "../".$image_name;
    //         // finally upload the image
    //         $upload = move_uploaded_file($source_path,$dest_path);
    //         // echo $upload;
    //         // check whether image is uploaded or not
    //         // and if not uploaded we will stop the process and redirect with error
    //         if($upload == false){
    //             $_SESSION['upload'] = "<div class =\"error\"> Failed to upload image</div>";
    //             header('location:'.SITEURL.'home.php');
    //             // stop the process
    //             die();
    //         }
    //     }
    // }
    // else{
    //     // dont upload image
    //     $image_name = "";
    // }

    $image_name = "";

    $sql = "INSERT INTO `Volunteer` (`Name`, `Phone` , `Gmail`, `Id_Type`, `Address`, `Image`) VALUES ('$d_name' , '$d_ph', '$d_gmail', '$id_type', '$d_address', '$image_name');";
    $res = mysqli_query($conn,$sql);
    if($res){
        // Data inserted 
        // echo "Data inserted";
        // Create a session variable to display message
        $_SESSION['add'] = "success";
        // Redirect page
        header("location:".SITEURL.'volunteer.php');
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
            alert("<?php echo ($_SESSION['add'] == 'success') ? 'Applied successfully' : 'Failed'; ?>");
        </script>
<?php
        unset($_SESSION['add']);
    }
?>

