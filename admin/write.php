<?php
include "includes/nav.php";
if (isset($_SESSION['username']))
{
?>
   <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<div class="main">
    

    <form action="write_check.php" method="POST" enctype="multipart/form-data">
        <?php
            if(isset($_SESSION['message']))
            {
                echo ($_SESSION['message']);
                unset ($_SESSION['message']);
            }
        ?>
        <h4>Title of the post</h4>
        <textarea name="title" placeholder=""></textarea>
        <h5>Featured Images</h5>
        <div class="input-field file-field">
        <div class="btn">
        Upload file
        <input type="file" name="image">
        </div>
        <div class="file-path-wrapper">
        <input type="text" class="file-path"></div>
        </div>
        <br>
        <br>
        <h4>Content area </h4>
        <textarea name="editor1"></textarea>
        <div class="center">
            <input type="submit" value="Publish" name="publish" class="btn white-text"> 
        </div>
    </form>
</div>





                <script>
                        CKEDITOR.replace( 'editor1' );
                        CKEDITOR.replace( 'title' );
                </script>

<?php
}
else
{
    $_SESSION['message']="Plese login here than go inside the dashbord";
    header("Location: login.php");
}
 
?>