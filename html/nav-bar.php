<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">

        <a class="navbar-brand" href="index.php"><img src="images/ut/logo.png" alt="Unique Touch" height="30px"
                                                       width="80px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php echo PAGE == INDEX ? 'active' : ''?>"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item <?php echo PAGE == ABOUT ? 'active' : ''?>"><a href="about.php" class="nav-link">About</a></li>
                <li class="nav-item <?php echo PAGE == PRODUCTS ? 'active' : ''?>"><a href="products.php" class="nav-link">Products</a></li>
                <li class="nav-item <?php echo PAGE == CONTACT ? 'active' : ''?>"><a href="contact.php" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>