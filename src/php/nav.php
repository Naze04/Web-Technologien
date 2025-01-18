<nav>
    <ul class="menu">
        <li><a href="home.php"><img alt="Logo" src=../assets/orange_logo.png class="navlogo"></a></li>
        <li>
            <a href="shop.php"><h4>Shop</h4></a>
            <ul class="dropdown">
                <li><a href="PLACEHOLDER"><h5>1</h5></a></li>
                <li><a href="PLACEHOLDER"><h5>2</h5></a></li>
                <li><a href="PLACEHOLDER"><h5>3</h5></a></li>
                <li><a href="PLACEHOLDER"><h5>4</h5></a></li>
            </ul>
        </li>
        <li>
            <a href="oPhone.php"><h4>OPhone</h4></a>
            <ul class="dropdown">
                <li><a href="PLACEHOLDER"><h5>1</h5></a></li>
                <li><a href="PLACEHOLDER"><h5>2</h5></a></li>
                <li><a href="PLACEHOLDER"><h5>3</h5></a></li>
                <li><a href="PLACEHOLDER"><h5>4</h5></a></li>
            </ul>
        </li>
        <li>
            <a href="oWatch.php"><h4>OWatch</h4></a>
            <ul class="dropdown">
                <li><a href="PLACEHOLDER"><h5>1</h5></a></li>
                <li><a href="PLACEHOLDER"><h5>2</h5></a></li>
                <li><a href="PLACEHOLDER"><h5>3</h5></a></li>
                <li><a href="PLACEHOLDER"><h5>4</h5></a></li>
            </ul>
        </li>
        <li>
            <a href="earthPods.php"><h4>EarthPods</h4></a>
            <ul class="dropdown">
                <li><a href="PLACEHOLDER"><h5>1</h5></a></li>
                <li><a href="PLACEHOLDER"><h5>2</h5></a></li>
                <li><a href="PLACEHOLDER"><h5>3</h5></a></li>
                <li><a href="PLACEHOLDER"><h5>4</h5></a></li>
            </ul>
        </li>
        <li>
            <a href="aboutUs.php"><h4>About Us</h4></a>
            <ul class="dropdown">
                <li><a href="PLACEHOLDER"><h5>1</h5></a></li>
                <li><a href="PLACEHOLDER"><h5>2</h5></a></li>
                <li><a href="PLACEHOLDER"><h5>3</h5></a></li>
                <li><a href="PLACEHOLDER"><h5>4</h5></a></li>
            </ul>
        </li>   
        <li  class="login">
            <a onclick="onLoginClick()"><h4>Login</h4></a>
            <ul id="logindropdown">
                <form action="action_page.php" method="post" class="loginform">
                    <div class="imgcontainer">
                        <img src="../assets/silly_guy.jpg" alt="Avatar" class="avatar">
                    </div>
                    <div class="logincontainer">
                        <label for="uname"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="uname" required>
                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>
                        <button type="submit" class="loginbtn">Login</button>
                        <label>
                            <input type="checkbox" checked="checked" name="remember">Remember me
                        </label>
                    </div>
                    <div class="logincontainer">
                        <button type="button" class="cancelbtn">Cancel</button>
                        <span class="psw"><a href="#">Forgot password?</a></span>
                    </div>
                </form>
            </ul>
            <ul id="profiledropdown">
                <form action="action_page.php" method="post" class="loginform">
                    <div class="imgcontainer">
                        <img src="../assets/silly_guy.jpg" alt="Avatar" class="avatar">
                    </div>
                    <div class="logincontainer">
                        <label for="uname"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="uname" required>
                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>
                        <button type="submit" class="loginbtn">Login</button>
                        <label>
                            <input type="checkbox" checked="checked" name="remember">Remember me
                        </label>
                    </div>
                    <div class="logincontainer">
                        <button type="button" class="cancelbtn">Cancel</button>
                        <span class="psw"><a href="#">Forgot password?</a></span>
                    </div>
                </form>
            </ul>
        </li>
    </ul>
</nav>