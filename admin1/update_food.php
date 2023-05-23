<?php  
    include('./admin_menu.php');
    // include('login-check.php');
    include('./config1/constants.php');

?>



<div class="main_content">
    <div class="wrapper">
        <h1>Update Food</h1>


        <?php
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                // create sql query to get all other details
                $sql = "SELECT * FROM `Donate_Food` where `S. No.` = $id ";
                $res= mysqli_query($conn,$sql);
                // count the rows to check whether the id is valid or not
                $count = mysqli_num_rows($res);
                if($count == 1){
                    // get all the data
                    $row = mysqli_fetch_assoc($res);
                    $name = $row['Name'];
                    
                    $Serves = $row['Serves'];
                    $donated = $row['donated'];
                }
                else{
                    $_SESSION['no_category_found'] = "<div class=\"error\">Food not found.</div>";
                    header("location:".SITEURL.'/manage_food.php');
                }
            }
            else{
                header("location:".SITEURL.'/manage_food.php');
            }
        ?> 
    <br><br>
        
        <form action="" method = POST enctype="multipart/form-data">
            <table class="tbl_30">
                <tr>
                    <td>Name</td>
                    <td><input type="title" name="name" value="<?php echo $name; ?>"/></td>
                </tr>
                <tr>
                    <td>Serves</td>
                    <td><input type="number" name="Serves" value="<?php echo $Serves; ?>"/></td>
                </tr>

                <tr>
                    <td>Donated :</td>
                    <td>
                        <input <?php if($donated == "Yes"){echo "checked";}?> type="radio" name="donated" value="Yes">Yes
                        <input <?php if($donated == "No"){echo "checked";}?> type="radio" name="donated" value="No">No
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="hidden" name = "id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update Food" class="btn_secondary">
                    </td>
                </tr>
            </table>
        </form>
        <?php 
            if(isset($_POST['submit'])){
                // echo "clicked";
                // get all the values form our form
                $name = $_POST['name'];
                // $current_image = $_POST['image_name'];
                
                $Serves = $_POST['Serves'];
                $donated = $_POST['donated'];

                // updating new image if selected
                // check whether the image is selected or not
                // if(isset($_FILES['image']['name'])){
                //     // get the image details
                //     $image_name=$_FILES['image']['name'];
                //     if($image_name != ""){


                //         $ext = end(explode('.',$image_name));
                //         $image_name = "Food_Category_".rand(000,999).'.'.$ext; // "Food_Category_738.jpg"

                //         $source_path = $_FILES['image']['tmp_name'];
                //         $dest_path = "../imag/category/".$image_name;
                //         // finally upload the image
                //         $upload = move_uploaded_file($source_path,$dest_path);
                //         // echo $upload;
                //         // check whether image is uploaded or not
                //         // and if not uploaded we will stop the process and redirect with error
                //         if($upload == false){
                //             $_SESSION['upload'] = "<div class =\"error\"> Failed to upload image</div>";
                //             header('location:'.SITEURL.'admin1/manage_category.php');
                //             // stop the process
                //             die();
                //         }

                //         // remove our current image
                //         if($current_image != ""){
                //             $remove_path = "../imag/category/".$current_image;
                //             $remove = unlink($remove_path);

                //             // check whether the image is removed or not

                //             // if failed to remove display message and stop the process
                //             if($remove == false){
                //                 $_SESSION['failed_remove'] = "<div class =\"error\"> Failed to remove image</div>";
                //                 header('location:'.SITEURL.'admin1/manage_category.php');
                //                 die();
                //             }
                //         }
                //         // else{
                //         //     $image_name = $current_image;
                //         // }
                        
                //     }
                //     else{
                //         $image_name = $current_image;
                //     }
                // }
                // else{
                //     $image_name = $current_image;
                // }

                

                // update the database
                // $sql2 = "UPDATE `table_category` SET
                //     title = '$title',
                //     image_name = '$image_name',
                //     featured = '$featured',
                //     active = '$active'
                //     where id = $id
                // ";


                $sql3 = "UPDATE `Donate_Food` SET
                    donated = '$donated'
                    WHERE `S. No.`= $id
                ";

                $res2= mysqli_query($conn,$sql3);

                if($res2 == true){
                    $_SESSION['category_updated'] = "<div class=\"success\">Food Updated Successfully.</div>";
                    header("location:".SITEURL.'/manage_food.php');
                }
                else{
                    $_SESSION['category_updated'] = "<div class=\"error\">failed to update Food.</div>";
                    header("location:".SITEURL.'/manage_food.php');
                }


                // redirect to manage category with database
            }



        ?>
    </div>
</div>

