<?php
$page_name = "home";
include('includes/header.php');
?>
<script type="text/javascript" src="/includes/js/marquee.js"></script>
<script type="text/javascript">
//function slideSwitch() {
//   var $active = $('#slideshow IMG.active');
//
//    if ( $active.length == 0 ) $active = $('#slideshow IMG:last');
//
//    // use this to pull the images in the order they appear in the markup
//    var $next =  $active.next().length ? $active.next()
//        : $('#slideshow IMG:first');
//
//    // uncomment the 3 lines below to pull the images in random order
//
//    // var $sibs  = $active.siblings();
//    // var rndNum = Math.floor(Math.random() * $sibs.length );
//    // var $next  = $( $sibs[ rndNum ] );
//
//
//    $active.addClass('last-active');
//
//    $next.css({opacity: 0.0})
//        .addClass('active')
//        .animate({opacity: 1.0}, 1000, function() {
//            $active.removeClass('active last-active');
//        });
//}
//
//$(function() {
//    setInterval( "slideSwitch()", 5000 );
//});
</script>

            <div id="content">
                <div id="left-column">
                    <div id="large-info">
                        <div id="large-info-header">
                            <img src="/css/images/xtreme-combos.png" alt="Xtreme Combos" />
                        </div>
                        <div id="m1" class="marquee"></div>
                    </div>
                    <div><!-- images -->
                        <a href="http://www.facebook.com/pages/Bloomington-IN/Wings-Xtreme-U/110435709004098">
                            <img src="/css/images/wxu-facebook.png" alt="Follow us on facebook" width="230" height="180" border="0" />
                        </a>
                        <img src="/css/images/we-deliver.png" alt="We deliver, open late" width="230" height="180" border="0" /><br />
                        <img src="/css/images/24-flavors.png" alt="Try one of our 24 flavors" width="230" height="180" border="0" />
                        <img src="/css/images/recycle-cup.png" alt="Bring in your cup for 79 cent refills" width="230" height="180" border="0" />
                    </div><!-- end images -->
                </div>


                <div id="right-column">
                    <div id="customer-login" >
                        <!-- <form id="loginForm" method="post" action="http://wingsxtremeu.com/order/index.php?main_page=login&amp;action=process" name="login"> -->
                        <form id="loginForm" method="post" action="order.php" name="login" width="80%">
                            <table id="login">
                                <tr>
                                    <td><label>Email:</label></td>
                                    <td><input type="text" id="login-email-address" maxlength="96" size="17" name="email_address"></td>
                                </tr>
                                <tr>
                                    <td><label>Password:</label></td>
                                    <td><input type="password" id="login-password" maxlength="40" size="17" name="password"></td>
                                </tr>
                            </table>
                            <input type="hidden" value="" name="securityToken">
                            <div>
                                <br />
                                <!--
                                <a href="http://wingsxtremeu.com/order/index.php?main_page=password_forgotten">Forgot password</a>
                                <input type="image" src="/css/images/login.png" align="absmiddle" alt="Sign In" title=" Sign In ">
                                -->
                                <a href="order.php">Forgot password</a>
                                <input type="image" src="/css/images/login.png" align="absmiddle" alt="Sign In" title=" Sign In ">
                            </div>
                        </form>
                    </div>
                    <div id="ff-wings">
                    </div>
                </div>
            </div> <!-- content -->

<?php
include('includes/footer.php');
?>