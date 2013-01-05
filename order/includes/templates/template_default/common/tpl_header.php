<link rel="stylesheet" type="text/css" href="http://www.wingsxtremeu.com/css/styles.css" />
<script type="text/javascript" src="http://www.wingsxtremeu.com/includes/js/jquery-1.2.6.min.js"></script>
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
<?php
/**
 * Common Template - tpl_header.php
 *
 * this file can be copied to /templates/your_template_dir/pagename<br />
 * example: to override the privacy page<br />
 * make a directory /templates/my_template/privacy<br />
 * copy /templates/templates_defaults/common/tpl_footer.php to /templates/my_template/privacy/tpl_header.php<br />
 * to override the global settings and turn off the footer un-comment the following line:<br />
 * <br />
 * $flag_disable_header = true;<br />
 *
 * @package templateSystem
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_header.php 4813 2006-10-23 02:13:53Z drbyte $
 */
?>

<?php
  // Display all header alerts via messageStack:
  if ($messageStack->size('header') > 0) {
    echo $messageStack->output('header');
  }
  if (isset($_GET['error_message']) && zen_not_null($_GET['error_message'])) {
  echo htmlspecialchars(urldecode($_GET['error_message']));
  }
  if (isset($_GET['info_message']) && zen_not_null($_GET['info_message'])) {
   echo htmlspecialchars($_GET['info_message']);
} else {

}
?>


<!--bof-header logo and navigation display-->
<?php
if (!isset($flag_disable_header) || !$flag_disable_header) {
?>

        <div id="wrapper" align="center">
            <div id="boxes">
                <!-- #modal window contents -->
                <div id="dialog" class="window">
                    <img id="modal-menu" src="/css/images/menu.jpg" alt="menu" width="900" height="677" border="0" />
                    <!-- close button is defined as close class -->
                    <!-- <a href="#" class="close">Close Windo</a>-->
                </div>
                <div id="mask"></div>
            </div>
            <div id="page">
                <div id="header">
                    <div id="navigation">
                        <ul>
                            <li><a href="http://www.wingsxtremeu.com/index.php" ><img src="/css/images/nav-btn-home.png" alt="Home" border="0" /></a></li>
                        </ul>
                        <ul>
                            <li><a href="#dialog" name="modal" ><img src="/css/images/nav-btn-menu.png" alt="Menu" border="0" /></a></li>
                        </ul>
                        <ul>
                            <li><a href="http://www.wingsxtremeu.com/order.php" ><img src="/css/images/nav-btn-order.png" alt="Order" border="0" /></a></li>
                        </ul>
                        <ul>
                            <li><a href="http://www.wingsxtremeu.com/location.php" ><img src="/css/images/nav-btn-location.png" alt="Location" border="0" /></a></li>
                        </ul>
                        <ul>
                            <li><a href="http://www.wingsxtremeu.com/contact.php" ><img src="/css/images/nav-btn-contact.png" alt="Contact Us" border="0" /></a></li>
                        </ul>
                    </div> <!-- navigation -->
                </div> <!-- header -->

<?php } ?>