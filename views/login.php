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