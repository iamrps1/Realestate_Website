<?php 
session_start();

if (isset($_SESSION['email']) && isset($_SESSION['pass'])) {
     if(!($_SESSION['email']==="" && $_SESSION['pass']==="" )){
        $email = $_SESSION['email'];
        $pass = $_SESSION['pass'];
         $name= $_SESSION['name'] ;
     }
   
   
   

   }?>
<header class="header">

    <nav class="navbar nav-1">
        <section class="flex">
            <a href="home.php" class="logo"><i class="fas fa-house"></i>Realestate</a>

            <ul>
                <li><a href="#">post property<i class="fas fa-paper-plane"></i></a></li>
            </ul>
        </section>
    </nav>

    <nav class="navbar nav-2">
        <section class="flex">
            <div id="menu-btn" class="fas fa-bars"></div>

            <div class="menu">
                <ul>
                    <li><a href="#">buy<i class="fas fa-angle-down"></i></a>
                        <ul>
                            <li><a href="#">house</a></li>
                            <li><a href="#">flat</a></li>
                            <li><a href="#">shop</a></li>
                            <li><a href="#">ready to move</a></li>
                            <li><a href="#">furnished</a></li>
                        </ul>
                    </li>
                    <li><a href="#">sell<i class="fas fa-angle-down"></i></a>
                        <ul>
                            <li><a href="#">post property</a></li>
                            <li><a href="#">dashboard</a></li>
                        </ul>
                    </li>
                    <li><a href="#">rent</a>
                        <ul>
                            <li><a href="#">house</a></li>
                            <li><a href="#">flat</a></li>
                            <li><a href="#">shop</a></li>
                        </ul>
                    </li>
                    <li><a href="#">help<i class="fas fa-angle-down"></i></a>
                        <ul>
                            <li><a href="about.php">about us</a></i></li>
                            <li><a href="contact.php">contact us</a></i></li>
                            <li><a href="contact.php#faq">FAQ</a></i></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <ul>
                <li><a href="#">saved <i class="far fa-heart"></i></a></li>
                <li><a href="#">account <i class="fas fa-angle-down"></i></a>
                <?php 
                if(!($name==="" && $pass==="" && $email==="")){?>
                    <ul>
                    <li> <a href="#"> <?php echo $name ?></a></li>
                    <li> <a href="#"><?php echo $email ?></a></li> 
                </ul>
                <?php }
                else{
                    ?>
                <ul>
                        <li><a href="login.php">login</a></li>
                        <li><a href="register.php">register</a></li>
                    </ul>
               <?php } ?>  
                
                </li>
            </ul>
        </section>
    </nav>

</header>