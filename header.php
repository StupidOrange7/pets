<p class="left_header_adopt"> <a href="index.php">&nbsp &nbsp &nbsp Adopt</a></p>
            <?php
            $email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
          if($email!='')
          {echo $email;?> <button class="btn heart">
                <a href="favourites.php"><img src="heart1.png" width="35px"></a>
           </button>
          <div class="dropdown"> <button class="dropbtn">
            </button>
            <div class="dropdown-content">
                <a href="Uploads_Bought.php">My Animals</a>
                <a href="Account.php">Account</a>
                <a href="logout.php">Logout</a>
                </div>
            </div>
            <?php 
          }
            else
            {;
                ?>
                <div class="link">
                <a href="SignUp.php" ><button style="border:none; cursor:pointer;"><p class="link"> Sign Up</p></button></a>
                <a href="SignIn.php"><button style="border:none;cursor:pointer;"><p class="link">Login</button></p></a>
                </div>
                <?php
            }
            ?>
        </header>