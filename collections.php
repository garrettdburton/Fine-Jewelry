<?php
$servername = "localhost";
$username = "garrett1";
$password = "regNym-qyrfyp-0fysmy";
$dbname = "inventory";
$_SESSION['collection'] = $_GET['collection'];
//$_SESSION['filter'] = $_GET['filter'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//Check collection
$sql = "SELECT * FROM necklaces WHERE collection LIKE '" . $_SESSION['collection'] . "'";

$result = mysqli_query($conn, $sql); // First parameter is just return of "mysqli_connect()" function
$conn->close();
?>

<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <title>Collections</title>
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

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

        <!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>                
<script src="js/respond.min.js"></script>                
<![endif]-->

        <style>
            .card-header {
                height: auto;
            }
            .card-body {
                height: auto;

            }

            .card-title {
                margin: 0;
                font-size: 16px;
                text-overflow: ellipsis;
                white-space: nowrap;
                overflow: hidden;
            }

            /*
            .card-header {
            border: none;
            }
            */

            .text-success p{
                margin: 0px;
                font-size: 14px;
            }

            /*
            .card {
            border: none;
            }
            */

            a {
                text-decoration: none;
            }

            a:hover 
            {
                text-decoration:none; 
                cursor:pointer;  
            }
        </style>

    </head>
    <body class="page">


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

            <div id="content" class="site-content">
                <article>
                    <div class="content-1330 center-relative">
                        <div class="page-desc">

                        </div>
                        <div class="clear"></div>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <div class="button-group filters-button-group">

                            <!-- PHP MENU -->
                            <?php
                            $active = $_SESSION['collection'];

                            echo '<h5 class="mx-auto">' . $active . '</h5>';

                            ?>

                            <div class="button" data-filter=".Agates" ><a href="collections.php?collection=Agate">Agates</a></div>

                            <div class="button" data-filter=".Carnelian"> <a href="collections.php?collection=Carnelian">Carnelian</a></div>

                            <div class="button" data-filter=".Egypt"><a href="collections.php?collection=Egypt">Egypt</a></div>

                            <div class="button" data-filter=".Swat"><a href="collections.php?collection=Swat%20Valley">Swat Valley</a></div> 

                            <div class="button" data-filter=".Mesopotamia"> <a href="collections.php?collection=Mesopotamia">Mesopotamia</a></div>

                            <div class="button" data-filter=".Peru"> <a href="collections.php?collection=Peru">Peru</a></div>

                            <div class="button" data-filter=".Saharan"><a href="collections.php?collection=Saharan">Saharan</a></div>





                        </div>
                        <!--Images-->

                        <!--
<div class="grid" id="portfolio">
<div class="grid-sizer"></div>
<div class="grid-item element-item p_one_third agates">
<a href="collections.php?collection=Agate">
<img src="demo-images/A_showcase.jpg" alt="">
<div class="portfolio-text-holder">
<p>Agates</p>
</div>
</a>
</div>

<div class="grid-item element-item p_one_third carnelian">
<a href="collections.php?collection=Carnelian">
<img src="demo-images/C_showcase.jpg" alt="">
<div class="portfolio-text-holder">
<p>Carnelian</p>
</div>
</a>
</div>

<div class="grid-item element-item p_one_third egypt">
<a href="collections.php?collection=Egypt">
<img src="demo-images/E_showcase.jpg" alt="">
<div class="portfolio-text-holder">
<p>Egypt</p>
</div>
</a>
</div>

<div class="grid-item element-item p_one_third swat">
<a href="collections.php?collection=Swat%20Valley">
<img src="demo-images/SW_showcase.jpg" alt="">
<div class="portfolio-text-holder">
<p>Swat Valley</p>
</div>
</a>
</div>

<div class="grid-item element-item p_one_third mesopotamia">
<a href="collections.php?collection=Mesopotamia">
<img src="demo-images/M_showcase.jpg" alt="">
<div class="portfolio-text-holder">
<p>Mesopotamia</p>
</div>
</a>
</div>

<div class="grid-item element-item p_one_third peru">
<a href="collections.php?collection=Peru">
<img src="demo-images/P_showcase.jpg" alt="">
<div class="portfolio-text-holder">
<p>Peru</p>
</div>
</a>
</div>
<div class="grid-item element-item p_one_third saharan">
<a href="collections.php?collection=Saharan">
<img src="demo-images/S_showcase.jpg" alt="">
<div class="portfolio-text-holder">
<p>Saharan</p>
</div>
</a>
</div>
</div>
-->

                        <div class="clear"></div>
                    </div>
                </article>
            </div>
            <div class="container">
                <div class="row ml-auto">
                    <?php
                    $count = 0;
                    while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..
                        // foreach ($row as $field => $value) { // I you want you can right this line like this: foreach($row as $value) {
                        // echo "<td>" . $value . "</td>"; // I just did not use "htmlspecialchars()" function. 
                        if($_SESSION['collection'] == $row['collection']){
                            $collection = $row['collection'];
                            $sku = $row['sku'];
                            $picture = $row['pic'];
                            $description = $row['description'];
                            $price = $row['price'];
                            $materials = $row['materials'];
                            $title = $row['name'];
                            $size = $row['size'];
                            $count++;

                            if($sku == null){
                                $sku = 'Coming Soon';
                            }

                            if($picture == null){
                                $picture = "/collections/placeholder.png";
                            }

                            if($price == null){
                                $price = 'Contact For Price';
                                echo '<div class="col-lg-3 col-md-6 p-2 ' . $collection . '">';
                                echo '<a href="product.php?sku=' . $sku . '" class="">';
                                echo '<div class="card">';
                                echo '<div class="card-header">';
                                echo '<img class="card-img" src="/images/inventory/'. $picture .'.jpg" alt="image coming soon">';
                                echo '</div>';
                                echo '<div class="card-body">';

                                echo '<div class="row m-0">';
                                echo '<div class="col-12">';
                                echo '<p class="card-title">' . $title .'</p>';   
                                echo '</div>';
                                echo '<div class="col-12">';
                                echo '<div class="text-success text-left"><p class="m-0">' . $price . '</p></div>';
                                echo '</div>'; 
                                echo '</div>'; 

                                echo '</div>';
                                echo '</div>';
                                echo '</a>';
                                echo '</div>';
                            } else {
                                echo '<div class="col-lg-3 col-md-6 p-2 ' . $collection . '">';
                                echo '<a href="product.php?sku=' . $sku . '" class="">';
                                echo '<div class="card">';
                                echo '<div class="card-header">';
                                echo '<img class="card-img" src="/images/inventory/'. $picture .'.jpg" alt="image coming soon">';
                                echo '</div>';
                                echo '<div class="card-body">';

                                echo '<div class="row m-0">';
                                echo '<div class="col-12">';
                                echo '<p class="card-title">' . $title .'</p>';   
                                echo '</div>';
                                echo '<div class="col-12">';
                                echo '<div class="text-success text-left"><p class="m-0">' . $price . '</p></div>';
                                echo '</div>'; 
                                echo '</div>'; 

                                echo '</div>';
                                echo '</div>';
                                echo '</a>';
                                echo '</div>';
                            }



                        } else {
                            return;
                        }



                    }

                    if($count == 0) {
                        echo '<div class="col-md-12 mx-auto"><h3 class="text-white mx-auto">Coming soon...</h3></div>';
                    }
                    ?>
                </div>
            </div>

            <!--Footer-->
            <footer class="footer">
                <div class="content-1330 center-relative">			
                    <ul>
                        <li class="left-footer-content">
                            Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved by <a href="https://unshiftedbitdev.com" target="_blank">Unshifted Bit Development</a>            
                        </li>
                        <li class="center-footer-content">                
                            <a href="index.php">
                                <img src="images/favicon.jpeg" alt="icon">
                            </a>                
                        </li>
                        <li class="right-footer-contnet">
                            <a href="https://www.instagram.com/davidebbinghousefinejewelry/">Instagram</a> 
                            <a href="https://www.etsy.com/shop/davidebbinghouse">Etsy</a>
                        </li>
                        <li class="left-footer-content mobile">
                            Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved by <br>

                            <a href="https://unshiftedbitdev.com" target="_blank">Unshifted Bit Development</a>
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