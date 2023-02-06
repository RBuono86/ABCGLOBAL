<!doctype html>
<html lang="en">

    <head>
        <title>Message Receipt Confirmation</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>

    <body>
        <!----header---->
        <?php require_once('view/navbar.php'); ?>

        <!----Confirmation---->
        <div class="container input-form">
            <h3>Thank you for contacting us</h3>
            <hr class="hr">
            <div class="row">
                <div class="col-md-8">
                    <img src="images/office.jpg" width="100%" alt="Office">
                    <p>Thank you for contacting us. We have received your message</p>
                </div>

                <div class="col-md-4">
                    <address>
                        <h4><i class="fa fa-university"></i> Corporate Headquarters </h4>
                    </address>
                    <p>
                        Some Avanue, New York 32320<br> <i class="fa fa-phone"></i> Phone: +1 800 999 9999<br> <i class="fa fa-fax"></i> Fax: +1 800 999 9999<br>
                        <a href="mailto:hq@abcglobal.com?Subject=Inquiry%20Ticket"><i class="fa fa-envelope"></i> Send E-mail</a>
                    </p>
                    <p>
                        <h4>Our Departments</h4>
                    </p>
                    <h6>Sales</h6>
                    <p>Phone +1 800 999 9999<br> Fax: +1 800 999 9999<br>
                        <a href="mailto:sales@abcglobal.com?Subject=Inquiry%20Ticket"> Send E-mail to Sales Department</a>
                    </p>
                    <h6>Customer Service</h6>
                    <p>Phone: +1 800 999 9999<br> Fax: +1 800 999 9999<br>
                        <a href="mailto:customer@abcglobal.com?Subject=Support%20Ticket"> Send E-mail to Support Department</a>
                    </p>
                    <h6>Network Planning</h6>
                    <p>Phone: +1 800 999 9999<br> Fax: +1 800 999 9999<br>
                        <a href="mailto:customer@abcglobal.com?Subject=Inquiry%20Ticket"> Send E-mail to Planning Department</a>
                    </p>
                    <h6>Web Master</h6>
                    <p>Phone: +1 800 999 9999<br> Fax: +1 800 999 9999<br>
                        <a href="mailto:customer@abcglobal.com?Subject=Website%20Ticket"> Send E-mail to Webmaster</a>
                    </p>
                </div>
            </div>
        </div>
        </form>
        <!----Main Footer---->
        <?php require_once('view/footer.php'); ?>
    