<?php
/**
 * Created by PhpStorm.
 * User: atara
 * Date: 8/3/2019
 * Time: 16:51
 */
?>
<div class="container">
    <div class="login-form">
        <div class="main-div">
            <div class="panel">
                <?php if ($noDetailsError == true || $noUserFoundError == true || $wrongPasswordError == true) { ?>
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Warning! </strong>
                        <?php if ($noDetailsError == true) {
                            echo "Username and password are required";
                        } else if ($noUserFoundError == true) {
                            echo "There was no user found with such username";
                        } else if ($wrongPasswordError == true) {
                            echo "The password is incorrect, try again.";
                        }?>
                        <br/>
                    </div>
                <?php } ?>
                <h2>Login</h2>
                <p>Please enter your username and password</p>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>

                <input type="submit" class="btn btn-primary" value="Login">
            </form>
        </div>
    </div>
</div>