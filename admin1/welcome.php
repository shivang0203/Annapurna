<?php
$uname = "123";
$pwd="456";
session_start ();
if(isset ($_SESSION['username'])){
    // echo "<h1> Welcome ".$_SESSION['username']."</h1>";
    // echo "<a href='product.php'>Product</a><br>";
    // echo "<br><a href='logout.php'><input type=button value=logout name=logout></a>";
    echo "<script>location.href='home.php'</script>";
}
else{
    if($_POST['username'] == $uname && $_POST['password']==$pwd) {
        $_SESSION['username']= $uname;
        echo "<script>location.href='home.php'</script>";
        // echo "<script>location.href='index.php'</script>";
    }
    else{
        echo "<script> alert('username or paasword incorrect!')</script>";
        echo "<script>location.href='index.php'</script>";
    }
}
?>