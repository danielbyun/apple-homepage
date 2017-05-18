<?php
    define ("TITLE", "Daniel's Apple Home Page");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo TITLE; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,600" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/apple.css">
</head>
<body>
    <div class="wrapper">
        <nav class="flex-nav">
            <a href="#" class="toggleNav">☰</a>
            <ul class="toggle">
                <li class="logo">
                    <a href="#" target="_blank"><i class="fa fa-apple fa-lg" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="#" target="_blank"> Mac </a>
                </li>
                <li>
                    <a href="#" target="_blank"> iPad </a>
                </li>
                <li>
                    <a href="#" target="_blank"> iPhone </a>
                </li>
                <li>
                    <a href="#" target="_blank"> Watch </a>
                </li>
                <li>
                    <a href="#" target="_blank"> TV </a>
                </li>
                <li>
                    <a href="#" target="_blank"> Music </a>
                </li>
                <li>
                    <a href="#" target="_blank"> Support </a>
                </li>
                <li class="social"><a href="#" target="_blank"><i class="fa fa-search fa-lg" aria-hidden="true"></i></a></li>
                <li class="social">
                    <a href="http://github.com/danielbyun" target="a_blank"><i class="fa fa-github fa-lg"></i></a>
                </li>
            </ul>
        </nav>
        <section class="hero">
            <div class="heroText">
                <h1>iPhone</h1>
                <h2>This is 7.</h2>
            </div>
        </section>
        <section class="tiles">
            <nav class="tiles-nav">
                <ul>
                    <a href="#"><li></li></a>
                    <a href="#"><li></li></a>
                    <a href="#"><li></li></a>
                    <a href="#"><li></li></a>
                </ul>
            </nav>
        </section>
    </div>
    <footer>
        <div class="footerSection">
            <nav>
                <ul>
                    <h3>Shop and Learn</h3>
                    <li><a href="#">Mac</a></li>
                    <li><a href="#">iPad</a></li>
                    <li><a href="#">iPhone</a></li>
                    <li><a href="#">Watch</a></li>
                    <li><a href="#">TV</a></li>
                    <li><a href="#">Music</a></li>
                    <li><a href="#">iTunes</a></li>
                    <li><a href="#">iPod</a></li>
                    <li><a href="#">Accessories</a></li>
                    <li><a href="#">Gift Cards</a></li>
                </ul>
            </nav>
            <nav>
                <ul>
                    <h3>Apple Store</h3>
                    <li><a href="#">Find a Store</a></li>
                    <li><a href="#">Genius Bar</a></li>
                    <li><a href="#">Workshops and Learning</a></li>
                    <li><a href="#">Youth Programs</a></li>
                    <li><a href="#">Apple Store App</a></li>
                    <li><a href="#">Refurbished and Clearance</a></li>
                    <li><a href="#">Financing</a></li>
                    <li><a href="#">Reuse and Recycling</a></li>
                    <li><a href="#">Order Status</a></li>
                    <li><a href="#">Shopping Help</a></li>
                </ul>
            </nav>
            <nav>
                <ul>
                    <h3>For Education</h3>
                    <li><a href="#">Apple and Education</a></li>
                    <li class="space"><a href="#">Shop for College</a></li>
                </ul>
                <ul>
                    <h3>For Business</h3>
                    <li><a href="#">Apple and Business</a></li>
                    <li><a href="#">Shop for Business</a></li>
                </ul>
            </nav>
            <nav>
                <ul>
                    <h3>Account</h3>
                    <li><a href="#">Manage Your Apple ID</a></li>
                    <li><a href="#">Apple Store Account</a></li>
                    <li class="space"><a href="#">iCloud.com</a></li>
                </ul>
                <ul>
                    <h3>Apple Values</h3>
                    <li><a href="#">Accessibility</a></li>
                    <li><a href="#">Education</a></li>
                    <li><a href="#">Environment</a></li>
                    <li><a href="#">Inclusion and Diversity</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Supplier Responsibility</a></li>
                </ul>
            </nav>
            <nav>
                <ul>
                    <h3>About Apple</h3>
                    <li><a href="#">Apple Info</a></li>
                    <li><a href="#">Newsroom</a></li>
                    <li><a href="#">Job Opportunities</a></li>
                    <li><a href="#">Press Info</a></li>
                    <li><a href="#">Investors</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Contact Apple</a></li>
                </ul>
            </nav>
        </div>
        <section>
            <div class="footerInfo">
                <p class="visit">More ways to shop: Visit an <a href="#">Apple Store</a>, call 1-800-MY-APPLE, or <a href="#">find a reseller.</a></p>
                <hr>
                <nav>
                    <p class="copyright">Copyright &copy; <?php echo date("Y"); ?> Apple Inc. All rights reserved.</p>
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Sales and Refunds</a></li>
                        <li><a href="#">Legal</a></li>
                        <li><a href="#">Site Map</a></li>
                    </ul>
                    <p class="img"><img src="img/us.png"/> United States</p>
                </nav>
            </div>
        </section>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        $(function() {
            $('.toggleNav').on('click',function() {
                $('.flex-nav ul').toggleClass('open');
            });
        });
    </script>

</body>
</html>