<?php
include "includes/nav.php";
if (isset($_SESSION['username']))
{
?>
<div class="main">
    <div class="row">
        <div class="col l6 m6 s12">
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
                    <a href="delete.php?id=<?php echo $row['id'];?>"><i class='far fa-trash-alt'></i> Delete</a> |
                    <a href=""><i class='fas fa-share'></i> Share</a></span>
                </li>
                <?php
                        }
                    }
                    else{
                        echo "<h3>Go start writing your post, By clicking the circular edit button</h3>";
                    }
                ?>
            </ul>
        </div>

        <div class="col l6 m6 s12">
            <ul class="collection with-header">
                <li class="collection-header">
                    <h5>Recent Comments</h5>
                </li>
                <li class="collection-item">
               <a href=""> Hello friends in this video we will see how to </a>
               <br>
               <span><a href="">Approve</a> | <a href="">Remove</a> </span>
                </li>
                <li class="collection-item">
               <a href=""> Hello friends in this video we will see how to </a>
               <br>
               <span><a href="">Approve</a> | <a href="">Remove</a> </span>
                </li>
                <li class="collection-item">
               <a href=""> Hello friends in this video we will see how to </a>
               <br>
               <span><a href="">Approve</a> | <a href="">Remove</a> </span>
                </li>
                <li class="collection-item">
               <a href=""> Hello friends in this video we will see how to </a>
               <br>
               <span><a href="">Approve</a> | <a href="">Remove</a> </span>
                </li>
            </ul>
        </div>

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
