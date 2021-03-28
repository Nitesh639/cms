<?php
include "includes/nav.php";
if (isset($_SESSION['username']))
{
    
?>
<?php
}
else
{
    $_SESSION['message']="Plese login here than go inside the dashbord";
    header("Location: login.php");
}
 
?>