<?php  
    include('./admin_menu.php');
    // include('login-check.php');
    include('./config1/constants.php');

?>



<div class="main_content">
    <div class="wrapper">
        <h1>Update Volunteer</h1>


        <?php
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                // create sql query to get all other details
                $sql = "SELECT * FROM `Volunteer` where id = $id ";
                $res= mysqli_query($conn,$sql);
                // count the rows to check whether the id is valid or not
                $count = mysqli_num_rows($res);
                if($count == 1){
                    // get all the data
                    $row = mysqli_fetch_assoc($res);
                    $name = $row['Name'];
                    
                    $approve = $row['approve'];
                }
                else{
                    $_SESSION['no_category_found'] = "<div class=\"error\">Category not found.</div>";
                    header("location:".SITEURL.'/manage_volunteer.php');
                }
            }
            else{
                header("location:".SITEURL.'/manage_volunteer.php');
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
                    <td>Approve :</td>
                    <td>
                        <input <?php if($approve == "Yes"){echo "checked";}?> type="radio" name="approve" value="Yes">Yes
                        <input <?php if($approve == "No"){echo "checked";}?> type="radio" name="approve" value="No">No
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="hidden" name = "id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update Volunteer" class="btn_secondary">
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
                
                $approve = $_POST['approve'];

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


                $sql3 = "UPDATE `Volunteer` SET
                    approve = '$approve'
                    WHERE id = $id
                ";

                $res2= mysqli_query($conn,$sql3);

                if($res2 == true){
                    $_SESSION['category_updated'] = "<div class=\"success\">Volunteer Updated Successfully.</div>";
                    header("location:".SITEURL.'/manage_volunteer.php');
                }
                else{
                    $_SESSION['category_updated'] = "<div class=\"error\">failed to update Volunteer.</div>";
                    header("location:".SITEURL.'/manage_volunteer.php');
                }


                // redirect to manage category with database
            }



        ?>
    </div>
</div>

