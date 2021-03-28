<?php
include "includes/header.php";
if (isset($_SESSION['username']))
{
?>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<style>
     @media (max-width:900px)
          {
            footer ,header ,.main{
              padding-left: 300px;
          }
          }

          footer ,header ,.main{
              padding-left: 350px;
          }
          .weq {
                margin-right: auto;
                width: 50%;
                border-radius: 50%;
                }
</style>

<nav class="teal">
    <div class="nav-wrapper">
    <div class="container">
      <a href="#" class="brand-logo center">Blogera</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
    </div>
    </div>
</nav>

      <ul class="side-nav fixed" id="mobile-demo" style="background:green; width:20%">
          <li>
              <div class="user-view">
                  <div class="background">
                      <img src="../img/img7.jpg" style="height:100%; width:100%" alt="" class="responsive-img">
                  </div>
                  <a href=""><img src="../img/img9.jpg" alt="" class=" weq"></a>
                    <span class="name  white-text" style="font-weight: bolder;">
                        <?php echo $_SESSION['username'];?>   
                    </span>
                    <span class="email white-text "style="font-weight: bolder;">
                        <?php
                        $user=$_SESSION['username'];
                        $sql="select email from users where username='$user'";
                        $res=mysqli_query($conn,$sql);
                        $row=mysqli_fetch_assoc($res);
                        echo $row['email'];
                        ?>   
                    </span>
              </div>
          </li>
          <li>
              <a href="dashbord.php">Dashbord</a>
            </li>
          <li>
              <a href="post.php">Post </a>
          </li>
          <li>
              <a href="image.php">Image</a>
          </li>
          <li>
              <a href="comment.php">Comments</a>
          </li>
          <li>
              <a href="">Setting</a>
              <div class="divider"></div>
          </li>
          <li>
              <a href="logout.php">Logout</a>
          </li>
      </ul>
        <div class="main">
        </div>


        <script>
$(".button-collapse").sideNav();
</script>
<?php
}
else
{
    $_SESSION['message']="Plese login here than go inside the dashbord";
    header("Location: login.php");
}
 
?>