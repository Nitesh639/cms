<?php
include "includes/header.php";
include "../includes/header.php";
?>
    <body style="background-image: url(../img/img1.jpg);background-size: cover;">
        <div class="row">
            <div class="col l6 offset-l3 m8 offset-m2 s12 ">
                <div class="card-panel center grey lighten-2" style="margin-bottom: 0px;">
                    <ul class="tabs grey lighten-2">
                        <li class="tab">
                            <a href="#login">Login</a>
                        </li>
                        <li class="tab">
                            <a href="#signup">Sign Up</a>
                        </li>
                    </ul>
                </div>
            </div>



                               <!-- This section for login the form  -->


            <div class="col l6 offset-l3 m8 offset-m2 s12" id="login">
                <div class="card-panel center" style="margin-top: 0;">
                    <h5>Login Here</h5>
                    <?php
                    if(isset($_SESSION['message']))
                    {
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                    }
                    ?>
                    <form action="login_check.php" method="POST">
                    <div class="input-field">
                        <input type="text" name="username"  placeholder="Enter Your Name" >
                    </div>
                    <div class="input-field">
                        <input type="password" name="password"  placeholder="Password" >
                    </div>
                    <div class="input-field">
                        <input type="submit" name="login"  class="btn" value="Login" >
                    </div>
                    </form> 
                </div>
            </div>


            <!-- This section for Signup the user form  -->
            <div class="col l6 offset-l3 m8 offset-m2 s12" id="signup">
                <div class="card-panel center" style="margin-top: 0;">
                    <h5>Signup Now</h5>
                  
                    <form action="signup.php" method="POST">
                    <div class="input-field">
                        <input type="email" name="email" id="email" placeholder="Enter the mail" class="validate">
                        <label for="email" data-error="Invalid Email Format" data-success="Valid Email"></label>
                    </div>
                    <div class="input-field">
                        <input type="text" name="username"  placeholder="Enter Your Name" >
                    </div>
                    <div class="input-field">
                        <input type="password" name="password"  placeholder="Password" >
                    </div>
                    <div class="input-field">
                        <input type="submit" name="signup"  class="btn" value="Sign Up" >
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </body>