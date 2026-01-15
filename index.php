<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<title>HTML Framework</title>
<meta name="description" content="," />
<meta name="keywords" content="" />

<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/ace-responsive-menu.css" rel="stylesheet" type="text/css" />

<link href="css/animate.css" rel="stylesheet" type="text/css" />

<!---fonts-->
<link href="css/fontawesome-5.15.3.css" rel="stylesheet" type="text/css" />
<!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet"> -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<!---menu-->
<link rel="stylesheet" href="css/menu-style.css" type="text/css" media="all" />

<!-- slider -->
<link href="owl-carousel/owl.carousel.min.css" rel="stylesheet">
<link href="owl-carousel/owl.theme.default.min.css" rel="stylesheet">

<link rel="stylesheet" href="venobox/venobox.css" type="text/css" media="screen" />

<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/responsive.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/jquery.3.3.1.min.js"></script>

</head>

<body>

<header>  

<div class="container">
    <div class="inner_container">
        <div class="logo">
            <a href="index.php"><img src="images/logo.png" alt="" /></a>
        </div>
        <nav>
            <!-- Menu Toggle btn-->
            <div class="menu-toggle">
                <h3>Menu</h3>
                <button type="button" id="menu-btn">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Responsive Menu Structure-->
            <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
            <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                <li>
                    <a>
                        <span class="title">About</span>
                        <!-- <span class="arrow"></span>  -->
                    </a>
                    <!-- <ul>
                        <li><a href="#">Lorem Ipsum 1</a></li>
                    </ul> -->
                </li>
                <li>
                    <a href="#">
                        <span class="title">Lorem Ipsum 2</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
</header>
<!-- End of Responsive Menu -->


<div id="main">
  
<!-- <div class="banner">
    <div class="main_banner owl-carousel owl-theme">    
        <div class="item_box">
            <img src="images/banners/banner-1.jpg" alt="" title="">
        </div>
    </div>
</div> -->
<!-- banner -->

<!-- <div class="hero">
    <div class="container">
        <div class="inner_container">
            
            <div class=""></div>

        </div>
    </div>
</div> -->

<section class="hero">
    <!-- <div class="container"> -->
    <div class="contain_90">
        <div class="inner_container">
            
            <div class="bg_image">
                <!-- <img src="images/hero.png"> -->
                <div class="txt">YFX</div>
            </div>
            <div class="left_pane width_50">
                <div class="heading">SHOWCASE YOUR BRAND.<br>FUEL YOUR GROWTH.</div>
                <div class="line"></div>
                <div class="sub_heading">
                    <p>High-impact photo and video shoots crafted for brands that want to stand out on social media.</p>
                    <p>From scroll-stopping reels to premium statics, YFX Creations helps you look better, engage faster, and grow stronger online.</p>
                </div>
            </div>
            <div class="right_pane width_50">
                <div class="img_box">
                    <img src="images/hero-camera.png">
                </div>
            </div>

        </div>
    </div>
</section>

<section class="section_2">
    <div class="contain_90">
        <div class="inner_container">

            <div class="left_pane width_50">
                <div class="heading">YOUR VISUAL GROWTH <br> PARTNER FOR SOCIAL MEDIA</div>
                <div class="line"></div>
                <div class="sub_heading">
                    <p>YFX Creations is not just a shoot studio.</p>
                    <p>We are a content partner that understands branding, platforms, and performance.</p>
                    <p>Every shoot is planned mobile-first and delivered ready to post.</p>
                </div>
            </div>
            <div class="right_pane width_50">
                <div class="img_box">
                    <img src="images/.jpg">
                </div>
            </div>

        </div>
    </div>
</section>

</div>
<!-- main -->



<!--sticky header-->
<!-- <script src="js/classie.js" type="text/javascript"></script>
<script>
function init() {
window.addEventListener('scroll', function(e){
  var distanceY = window.pageYOffset || document.documentElement.scrollTop,
  shrinkOn = 50,
  header = document.querySelector("header");
  if (distanceY > shrinkOn) {
  classie.add(header,"smaller");
  } else {
  if (classie.has(header,"smaller")) {
    classie.remove(header,"smaller");
  }
  }
});
}
window.onload = init();
</script> -->
<script type="text/javascript" src="js/common.js"></script>
<script src='js/jquery.easing.1.3.js'></script>


<script src="js/ace-responsive-menu.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function () {
    $("#respMenu").aceResponsiveMenu({
        resizeWidth: '768', // Set the same in Media query       
        animationSpeed: 'fast', //slow, medium, fast
        accoridonExpAll: false //Expands all the accordion menu on click
    });

     // Tab
    $('ul.tabs li').click(function(){
        var tab_id = $(this).attr('data-tab');

        $('ul.tabs li').removeClass('current');
        $('.tab-content').removeClass('current');

        $(this).addClass('current');
        $("#"+tab_id).addClass('current');
    });

    $('ul.cs_tabs li').click(function(){
        var tab_id = $(this).attr('data-tab');
        console.log("inside second tab");
        $('ul.cs_tabs li').removeClass('active');
        $('.cs-tab-content').removeClass('active');

        $(this).addClass('active');
        $("#"+tab_id).addClass('active');
    });
});
</script>

<script type="text/javascript" src="venobox/venobox.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  /* default settings */
  $('.venobox').venobox({
    framewidth: '500px', 
  }); 
});
</script>




<script src='js/wow.min.js'></script>
<script>
new WOW().init();
</script>

<!--slider-->
<script src="owl-carousel/owl.carousel.js"></script>
<script src="owl-carousel/owl-content-animation.js"></script>

</body>
</html>
