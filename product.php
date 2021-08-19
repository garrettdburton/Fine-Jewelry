<?php
$servername = "localhost";
$username = "garrett1";
$password = "regNym-qyrfyp-0fysmy";
$dbname = "inventory";
$_SESSION['sku'] = $_GET['sku'];
//$_SESSION['filter'] = $_GET['filter'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Variable Declaration
$sku = null;
$picture = null;
$description = null;
$price = null;
$materials = null;
$title = null;
$size = null;

// Show necklaces with a SKU of Swat Valley
$sql = "SELECT * FROM necklaces WHERE sku = '$_SESSION[sku]'";
$result = mysqli_query($conn, $sql); // First parameter is just return of "mysqli_connect()" function

while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..

    foreach ($row as $field => $value) { // I you want you can right this line like this: foreach($row as $value) {
        // echo "<td>" . $value . "</td>"; // I just did not use "htmlspecialchars()" function. 
        $collection = $row['collection'];
        $sku = $row['sku'];
        $picture = $row['pic'];
        $description = $row['description'];
        $price = $row['price'];
        $materials = $row['materials'];
        $title = $row['name'];
        $size = $row['size'];

    }
}

$conn->close();
?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <title><?php echo $title ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Fine Jewelry" />
        <meta name="keywords" content="Beads, Necklaces, Fine, Jewelry" />
        <meta name="author" content="UnshiftedBitDevelopment" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="shortcut icon" href="images/favicon.png" />    
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700' rel='stylesheet' type='text/css'>	
        <link rel="stylesheet" type="text/css"  href='css/clear.css' />
        <link rel="stylesheet" type="text/css"  href='css/common.css' />
        <link rel="stylesheet" type="text/css"  href='css/font-awesome.min.css' />
        <link rel="stylesheet" type="text/css"  href='css/carouFredSel.css' />
        <link rel="stylesheet" type="text/css"  href='css/prettyPhoto.css' />        
        <link rel="stylesheet" type="text/css"  href='css/sm-clean.css' />        
        <link rel="stylesheet" type="text/css"  href='style.css' />

        <!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>                
<script src="js/respond.min.js"></script>                
<![endif]-->
        <style>
            strong {
                font-size: 24px;
            }
            p {
                font-size: 22px;
            }
        </style>
    </head>
    <body class="single single-portfolio">



        <div class="body-wrapper">           
            <div class="content-1330 header-holder center-relative">
                <div class="header-logo left">

                    <h1 class="site-title">
                        <a href="index.php">
                            <img src="images/favicon.jpeg" alt="logo">
                        </a>               
                    </h1>

                </div>

                <div class="header-menu right">
                    <nav id="header-main-menu" class="left">
                        <ul class="main-menu sm sm-clean">
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="about.html">About</a>
                            </li>
                            <li>
                                <a href="collections.php?collection=Agate">Collections</a>
                            </li>    
                            <li>
                                <a href="https://www.instagram.com/davidebbinghousefinejewelry/">Instagram</a> 
                            </li>
                            <li>
                                <a href="https://www.etsy.com/shop/davidebbinghouse">Etsy</a>
                            </li>
                            <li>
                                <a href="contact.html">Contact</a>

                            </li>
                        </ul>
                    </nav>
                    <div class="clear"></div>							
                </div>
                <div class="clear"></div>
            </div>

            <div id="content" class="site-content content-1330 center-relative">
                <article>                                              
                    <div class="content-1330 center-relative clear">                
                        <div class="entry-content">
                            <div class="content-wrap">                           
                                <div class="content-1530 center-relative block">
                                    <script>
                                        var slider1_speed = "500";
                                        var slider1_auto = "true";
                                        var slider1_pagination = "true";
                                        var slider1_hover = "true";
                                    </script>
                                    <div class="image-slider-wrapper">
                                        <ul id="slider1" class="image-slider slides center-text">
                                            <li>
                                                <?php echo '<img class="card-img" src="/images/inventory/'. $picture .'.jpg" alt="image coming soon">'; ?>
                                            </li>
                                        </ul>                        
                                        <div class="slider1_pagination carousel_pagination left"></div>
                                    </div>
                                    <div class="clear"></div>                                                
                                </div>
                                <div class="clear"></div>
                                <div class="clear"></div>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <div class="one_half text-right portfolio-item-info">
                                    <strong>Name: </strong><p><?php echo $title; ?></p><br>
                                    <strong>Collection: </strong><p><?php echo $collection; ?></p><br>
                                    <strong>Material: </strong><p><?php echo $materials; ?></p><br>
                                    <strong>Size: </strong><p><?php echo $size; ?></p><br>
                                    <strong>Price: </strong><p><?php echo $price; ?></p><br>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <div class="text-right">
                                        <a href="contact.html" target="_self" class="button">Inquire</a>
                                    </div>
                                </div>
                                <div class="one_half last ">
                                    <strong>Description</strong>
                                    <br>
                                    <p>&nbsp;</p>
                                    <p>
                                        <?php echo $description; ?>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </article>
            </div>

            <!--Footer-->
            <footer class="footer">
                <div class="content-1330 center-relative">			
                    <ul>
                        <li class="left-footer-content">
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by <br> <a href="https://unshiftedbitdev.com" target="_blank">Unshifted Bit Development</a>        
                        </li>
                        <li class="center-footer-content">                
                            <a href="index.html">
                                <img src="images/favicon.jpeg" alt="icon">
                            </a>                
                        </li>
                        <li class="right-footer-contnet">
                            <a href="https://www.instagram.com/davidebbinghousefinejewelry/">Instagram</a> 
                            <a href="https://www.etsy.com/shop/davidebbinghouse">Etsy</a>
                        </li>
                        <li class="left-footer-content mobile">
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by <br> <a href="https://unshiftedbitdev.com" target="_blank">Unshifted Bit Development</a>
                        </li>
                    </ul>
                </div>
            </footer>

            <!-- End .body-border -->
        </div>



        <!--Load JavaScript-->
        <script src="js/jquery.js"></script>			                                       
        <script src='js/jquery.fitvids.js'></script>
        <script src='js/jquery.smartmenus.min.js'></script>        
        <script src='js/imagesloaded.pkgd.js'></script>        
        <script src='js/isotope.pkgd.js'></script>        
        <script src='js/jquery.carouFredSel-6.0.0-packed.js'></script>
        <script src='js/jquery.mousewheel.min.js'></script>
        <script src='js/jquery.touchSwipe.min.js'></script>
        <script src='js/jquery.easing.1.3.js'></script>
        <script src='js/jquery.prettyPhoto.js'></script>        
        <script src='js/jquery.ba-throttle-debounce.min.js'></script>                
        <script src='js/jquery.nicescroll.min.js'></script>
        <script src='js/main.js'></script>
    </body>
</html>