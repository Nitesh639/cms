<?php
include "includes/header.php";
if (isset($_SESSION['username']))
{
?>
<?php
if (isset($_GET['id']))
{
    $id=$_GET['id'];
    $id=mysqli_real_escape_string($conn,$id);
    $id=htmlentities($id);

    if(isset($_POST['ok']))
   {
    $sql="delete from posts where id=$id";
    $res=mysqli_query($conn,$sql);
    header ("Location: dashbord.php");
   }
   else{
    header("Location: dashbord.php");
   }
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