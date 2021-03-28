<?php
include "includes/header.php";
if (isset($_SESSION['username']))
{
?>
<?php
    if (isset($_POST['publish']))
    {   
        $id=$_GET['id'];
        $id=mysqli_real_escape_string($conn,$id);
        $id=htmlentities($id);
        $title=$_POST['title'];
        $title=mysqli_real_escape_string($conn,$title);
        $title=htmlentities($title);
        $data=$_POST['editor1'];
        $data=mysqli_real_escape_string($conn,$data);
        $data=htmlentities($data);

        $sql="update posts set title='$title' , content='$data' where id=$id";
        $res=mysqli_query($conn,$sql);
        
        if($res)
        {
            $_SESSION['message']="Post is Updated";
            header ("Location:edit.php?id=".$id);
        }
        else
        {
            $_SESSION['message']="Not Updated Try again";
            header ("Location:edit.php?id=".$id);
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