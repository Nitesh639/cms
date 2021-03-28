<?php
include "includes/nav.php";
if (isset($_SESSION['username']))
{
if (isset($_SESSION['username']))
{
?>

    <div class="row main">
        <div class="col l12 m12 s12">
            <ul class="collection with-header">
                <li class="collection-header">
                    <h5>Recent Posts</h5>
                </li>
                <?php
                    $sql="select * from posts order by id desc";
                    $res=mysqli_query($conn,$sql);
                    if(mysqli_num_rows($res)>0)
                    {
                        $n=0;
                        while($row=mysqli_fetch_assoc($res))
                        {   
                            $n=$n+1;
                ?>
                <li class="collection-item">
                    <a href="">
                        <?php  echo $n; echo ". "?>
                        <?php echo $row['title'];?>
                    </a>
                    <br>
                    <span><a href="edit.php?id=<?php echo $row['id'];?>"><i class='fas fa-pen'></i> Edit</a> |
                     <a href="delete.php?id=<?php echo $row['id'];?>"><i class='far fa-trash-alt'></i> Delet</a> |
                     <a href=""><i class='fas fa-share'></i> Share</a></span>
                </li>
                <?php
                        }
                    }
                ?>
            </ul>
        </div>
    </div>

<div class="fixed-action-btn">
    <a href="write.php" class="btn-floating btn btn-large white-text pulse"><i class='fas fa-pen' style='font-size:24px;'></i></a>
</div>

<?php
}
else
{
    $_SESSION['message']="Plese login here than go inside the dashbord";
    header("Location: login.php");
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