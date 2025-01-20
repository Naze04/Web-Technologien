<nav>
    <ul class="navmenu">
        <li><a href="home.php" tabindex="1"><img alt="Orange Logo" src=../assets/orange_logo.png></a></li>
        <li class="left">
            <a href="shop.php" tabindex="1"><h4>Shop</h4></a>
            <ul id="dropdown">
                <li><a href="oPhone.php" tabindex="1"><h5>OPhone</h5></a></li>
                <li><a href="oWatch.php" tabindex="1"><h5>OWatch</h5></a></li>
                <li><a href="earthPods.php" tabindex="1"><h5>EarthPods</h5></a></li>
            </ul>
        </li>
        <li class="right"><a href="cart.php" tabindex="1"><img alt="Warenkorb" src=../assets/cart.png></a></li>
        <li>
            <a onclick="onLoginClick()"><h4>Login</h4></a>
            <ul id="logindropdown">
                <form action="action_page.php" method="post">
                    <div class="imgcontainer">
                        <img src="../assets/silly_guy.jpg" alt="Avatar" class="avatar">
                    </div>
                    <div class="logincontainer">
                        <label for="uname"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="uname" required>
                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>
                        <button type="submit">Login</button>
                        <label>
                            <input type="checkbox" checked="checked" name="remember">Remember me
                        </label>
                    </div>
                    <div class="logincontainer">
                        <span class="forgotpsw"><a href="#">Forgot password?</a></span>
                    </div>
                </form>
            </ul>
            <ul id="profiledropdown">
                <form action="action_page.php" method="post">
                    <div class="imgcontainer">
                        <img src="../assets/silly_guy.jpg" alt="Avatar" class="avatar">
                    </div>
                    <div class="logincontainer">
                        <label for="uname"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="uname" required>
                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>
                        <button type="submit">Login</button>
                        <label>
                            <input type="checkbox" checked="checked" name="remember">Remember me
                        </label>
                    </div>
                    <div class="logincontainer">
                        <span class="forgotpsw"><a href="#">Forgot password?</a></span>
                    </div>
                </form>
            </ul>
        </li>
    </ul>
</nav>