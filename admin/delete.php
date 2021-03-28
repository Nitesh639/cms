<?php
include "includes/header.php";
if (isset($_SESSION['username']))
{
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $id=mysqli_real_escape_string($conn,$id);
    $id=htmlentities($id);
    ?>

    <form action="delete_check.php?id=<?php echo $id ;?>" method="POST" enctype="multipart/form-data">
        <div class="center">
        <h1>Realy You Want to Delete it</h1>
        <div class="center">
            <input type="submit" value="OK" name="ok" class="btn white-text"> 
        </div>
        <div class="center">
            <input type="submit" value="I Change my Mind" name="Delete" class="btn white-text"> 
        </div>
        </div>
    </form>
    <?php
  
}
?>

<?php
}
else
{
    $_SESSION['message']="Plese login here than go inside the dashbord";
    header("Location: login.php");
}
 
?>