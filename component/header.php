<?php
        include 'component/modal.php';
        include 'component/comon.php';

        ?>
   <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a  href="index.php"><img src = to.png ></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION['email'])) {
                    ?>
                     <li><a href="index.php #about"> <span class = "fa fa-user"> </span>&nbsp;&nbsp;About Us</a></li>
                     <li> <a href = "products.php"><span class="fa fa-product-hunt"></span>&nbsp;&nbsp;Products</a></li>
                    <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span>&nbsp;&nbsp;Cart</a></li>
                    <li><a href = "settings.php"><span class = "fa fa-cog"></span>&nbsp;&nbsp;Settings</a></li>
                    <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span>&nbsp;&nbsp; Logout</a></li>

                    <?php
                } else {
                    ?>
                    <li><a href="signup.php"> <span class = "glyphicon glyphicon-user"> </span>&nbsp;&nbsp;Sign Up</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#loginmodal"><span class="fa fa-sign-in">&nbsp;&nbsp;</span> Log in</a></li>
                   <li> <a href = "products.php"><span class="fa fa-product-hunt"></span>&nbsp;&nbsp;Products</a></li>
                    <li><a href="index.php #about"><span class="glyphicon glyphicon-user"></span> &nbsp;&nbsp;About Us</a></li>
                    <li><a href="contact_us.php"><span class="fa fa-phone"></span>&nbsp;&nbsp;Contact Us</a></li>
                        <?php
                    }
                    ?>
            </ul>
        </div>
    </div>
</div>


