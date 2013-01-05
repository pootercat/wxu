<?php
$page_name = "contact";
$to = "dan@nextgenwebdesign.com";
$subject = "Feedback from WXU";
$message = "Name: " . $_POST['name'];
$message .= "Email: " . $_POST['email'];
$message .= "Comments: " . $_POST['comments'];

if ($_POST['process'] == 1) {
    if(trim($_POST['name']) == '') {
        $err_name = 'Please enter your name';
    }
    if(trim($_POST['comments']) == '') {
        $err_comments = 'Please enter some comments';
    }

    $errmsg = $err_name . $err_comments;

    if(!$errmsg) {
        mail( $to, $subject, $message, "From: Feedback" );
        header( "Location: http://www.wingsxtremeu.com/contact.php?sent=1" );
    }
}
?>

<?php
include('includes/header.php');
?>
            <?php
            if (!$errmsg && $_GET['sent'] == 1) {
            ?>
                <div id="content">
                <p>Thank you, your feedback has been successfully sent.</p>
                </div>
            <?php
            }
            else {
           ?>
            <div id="content" align="left">
                <div id="feedback">
                <h3>Feedback</h3>
                <p>Let us know what you think.  Take a minute to fill out the following form and give us your comments.</p>
                <form id="feedback" action="contact.php" method="post">
                    <table>
                        <?php if($err_name) { print '<tr><td colspan="2"><p class="error">' . $err_name . '</p></td></tr>'; } ?>
                        <tr>
                            <td><label>*Name:</label></td>
                            <td><input type="textbox" name="name" /></td>
                        </tr>
                        <tr>
                            <td><label>Email:</label></td>
                            <td><input type="textbox" name="email" /></td>
                        </tr>
                        <?php if($err_comments) { print '<tr><td colspan="2"><p class="error">' . $err_comments . '</p></td></tr>'; } ?>
                        <tr>
                            <td colspan="2"><label>*Comments:</label><br />
                            <textarea name="comments" rows="5" cols="30"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="hidden" name="process" value="1">
                                <input type="submit" value="Submit">
                            </td>
                        </tr>
                    </table>
                </form>
                </div>

                <div id="address">
                <h3>WingsXtremeU Address</h3>
                <p>2612 E 10th St.<br />
                   Bloomington, IN 47408<br />
                   Phone: 812-333-WING(9464)
                </p>
                </div>

                <div id="emp-opportunities"
                <h3>Employment Opportunities</h3>
                <p>Looking for employment opportunities?  Download and fill out our 
                   <a class="link" href="/downloads/employee_application.pdf">employee application</a> and drop it
                   off.</p>
                </div>

            </div> <!-- content -->
            <?php
            }
            ?>

<?php
include('includes/footer.php');
?>
