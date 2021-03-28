<?php
include "includes/header.php";
if (isset($_SESSION['username']))
{
?>
<?php
    if (isset($_POST['publish']))
    {
        $title=$_POST['title'];
        $title=mysqli_real_escape_string($conn,$title);
        $title=htmlentities($title);
        $data=$_POST['editor1'];
        $data=mysqli_real_escape_string($conn,$data);
        $data=htmlentities($data);
        $image=$_FILES['image'];
        $img_name=$_FILES['image']['name'];
        $img_size=$_FILES['image']['size'];
        $img_dir=$_FILES['image']['temp_name'];
        $type=$_FILES['image']['type'];

        if($type=="image/jpeg" || $type=="image/png"||$type=="image/jpg")
        {
            if($img_size <=2097152)
            {

        $sql="insert into posts (title,conten,feature_image) value('$title','$data''$img_name')";
        $res=mysqli_query($conn,$sql);
        
        if($res)
        {
            $_SESSION['message']="Post is publised";
            header ("Location:write.php");
        }
        else
        {
            $_SESSION['message']="Not Publised Try again";
            header ("Location: write.php");
        }
                        
            }
            else{
                $_SESSION['message']="Your image more than 2MB.";
            header ("Location: write.php");
            }
        }
        else{
            $_SESSION['message']="This image type is not found.";
        header ("Location: write.php");
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