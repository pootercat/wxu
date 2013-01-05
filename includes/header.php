<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php if ($page_name == "home" ) { ?>
        <meta name="description" content="Welcome to the home of the best wings in Bloomington!  We offer 25 different flavors to tickle your taste buds!  What are you waiting for...GET SAUCED!" >
        <meta name="keywords" content="wing delivery, bloomington wings, wings, bloomington wing delivery, bloomington in wings, free online ordering" >
        <?php } ?>
        <?php if ($page_name == "menu" ) { ?>
        <meta name="description" content="Welcome to the home of the best wings in Bloomington!  We offer 25 different flavors to tickle your taste buds!  What are you waiting for...GET SAUCED!" >
        <meta name="keywords" content="wing delivery, bloomington wings, wings, bloomington wing delivery, bloomington in wings, free online ordering" >
        <?php } ?>
        <?php if ($page_name == "order" ) { ?>
        <meta name="description" content="Welcome to the home of the best wings in Bloomington!  We offer 25 different flavors to tickle your taste buds!  What are you waiting for...GET SAUCED!" >
        <meta name="keywords" content="wing delivery, bloomington wings, wings, bloomington wing delivery, bloomington in wings, free online ordering" >
        <?php } ?>
        <?php if ($page_name == "contact" ) { ?>
        <meta name="description" content="Welcome to the home of the best wings in Bloomington!  We offer 25 different flavors to tickle your taste buds!  What are you waiting for...GET SAUCED!" >
        <meta name="keywords" content="wing delivery, bloomington wings, wings, bloomington wing delivery, bloomington in wings, free online ordering" >
        <?php } ?>
        <?php if ($page_name == "location" ) { ?>
        <meta name="description" content="Welcome to the home of the best wings in Bloomington!  We offer 25 different flavors to tickle your taste buds!  What are you waiting for...GET SAUCED!" >
        <meta name="keywords" content="wing delivery, bloomington wings, wings, bloomington wing delivery, bloomington in wings, free online ordering" >
        <?php } ?>
        <link rel="stylesheet" type="text/css" href="/css/styles.css" />
        <script type="text/javascript" src="includes/js/jquery-1.2.6.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {

                //select all the a tag with name equal to modal
                $('a[name=modal]').click(function(e) {
                    //Cancel the link behavior
                    e.preventDefault();
                    //Get the A tag
                    var id = $(this).attr('href');

                    //Get the screen height and width
                    var maskHeight = $(document).height();
                    var maskWidth = $(window).width();

                    //Set height and width to mask to fill up the whole screen
                    $('#mask').css({'width':maskWidth,'height':maskHeight});

                    //transition effect
                    $('#mask').fadeIn(1000);
                    $('#mask').fadeTo("slow",0.8);

                    //Get the window height and width
                    var winH = $(window).height();
                    var winW = $(window).width();

                    //Set the popup window to center
                    //$(id).css('top',  winH/2-$(id).height()/2);
                    //$(id).css('left', winW/2-$(id).width()/2);
                    $(id).css('top',  0);
                    $(id).css('left', 150);

                    //transition effect
                    $(id).fadeIn(2000);

                });

                //if close button is clicked
                $('.window .close').click(function (e) {
                    //Cancel the link behavior
                    e.preventDefault();
                    $('#mask, .window').hide();
                });

                //if mask is clicked
                $('#mask').click(function () {
                    $(this).hide();
                    $('.window').hide();
                });

                //if image is clicked
                $('#modal-menu').click(function () {
                    $('#mask, .window').hide();
                });

            });
        </script>
        <script type="text/javascript">
          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-18316733-1']);
          _gaq.push(['_trackPageview']);

          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();

        </script>
        <title>WingsXtremeU, Get Sauced!</title>
    </head>
    <body>

        <div id="wrapper" align="center">
            <div id="boxes">
                <!-- #modal window contents -->
                <div id="dialog" class="window">
                    <img id="modal-menu" src="/css/images/menu.jpg" alt="menu" width="700" height="3181" border="0" />
                    <!-- close button is defined as close class -->
                    <!-- <a href="#" class="close">Close Windo</a>-->
                </div>
                <div id="mask"></div>
            </div>
            <div id="page">
                <div id="header">
                    <div id="navigation">
                        <ul>
                            <li><a href="index.php" ><img src="/css/images/nav-btn-home.png" alt="Home" border="0" /></a></li>
                        </ul>
                        <ul>
                            <li><a href="#dialog" name="modal" ><img src="/css/images/nav-btn-menu.png" alt="Menu" border="0" /></a></li>
                        </ul>
                        <ul>
                            <li><a href="order.php" ><img src="/css/images/nav-btn-order.png" alt="Order" border="0" /></a></li>
                        </ul>
                        <ul>
                            <li><a href="location.php" ><img src="/css/images/nav-btn-location.png" alt="Location" border="0" /></a></li>
                        </ul>
                        <ul>
                            <li><a href="contact.php" ><img src="/css/images/nav-btn-contact.png" alt="Contact Us" border="0" /></a></li>
                        </ul>
                    </div> <!-- navigation -->
                </div> <!-- header -->
