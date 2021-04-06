<?php
include "includes/nav.php";
if (isset($_SESSION['username']))
{
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $id=mysqli_real_escape_string($conn,$id);
    $id=htmlentities($id);
    $sql="select *from posts where id=$id ";
    $res=mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)>0)
    {
        $row=mysqli_fetch_assoc($res);
?>

<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<div class="main">
    

    <form action="edit_check.php?id=<?php echo $id ;?>" method="POST" enctype="multipart/form-data">
        <?php
            if(isset($_SESSION['message']))
            {
                echo ($_SESSION['message']);
                unset ($_SESSION['message']);
            }
        ?>
        <h4>Title of the post</h4>
        <textarea name="title" placeholder="">
            <?php
             echo $row['title'];
            ?>
        </textarea>
        <h4>Content area </h4>
        <textarea name="editor1">
            <?php
             echo $row['content'];
            ?>
        </textarea>
        <div class="center">
            <input type="submit" value="Update" name="publish" class="btn white-text"> 
        </div>
    </form>
</div>





                <script>
                        CKEDITOR.replace( 'editor1' );
                        CKEDITOR.replace( 'title' );
                </script>


<?php
    }
    else{
        header("Location: dasbord.php");
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