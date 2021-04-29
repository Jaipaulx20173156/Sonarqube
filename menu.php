
    <div class="ruby-nav">
        <div class="review">
            <nav>
                <a href="index.php" class="logo">
                    Consultly
                </a>
            </nav>
        </div>
        <div class="category">
            <nav>
                <?php if(!isset($_SESSION['userDetails'])){ ?>
                    <a href="login.php">
                        Login
                    </a>
                    <?php }  
                    
                    if(isset($_SESSION['userDetails'])){ ?>
                    <a href="meetings.php">Dashboard</a>
                    <a href="new-session.php">Schedule new Session</a>
                    <a href="signout.php">
                        SIGN OUT
                    </a>
                    <?php }  
                    if(!isset($_SESSION['userDetails'])){ ?>
                    <a href="signup.php">
                    Signup
                    </a>
                    <?php }  ?>
            </nav>
        </div>
    </div>