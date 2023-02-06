<!doctype html>
<html lang="en">
<head>
    <title>Contact Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        input[type="radio"] {
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <!----header---->
    <?php require_once('view/navbar.php'); ?>
    <!----Contact Form---->
    <form action="contact.php" method="POST">
        <div class="container page-overlay">
            <h3>Contact Us</h3>
            <hr class="hr">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" size=40 name="s_Name" required="vital" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <select name="s_Title" class="form-control">
                            <option selected="selected" value="ind">Individual Contributor</option>
                            <option value="ceo">CEO/Managing Director</option>
                            <option value="cfo">CFO/Finance Director</option>
                            <option value="cio">IT Director</option>
                            <option value="vp">Vice President</option>
                            <option value="dir">Director</option>
                            <option value="mgr">Manager</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Enterprise</label>
                        <input type="radio" name="s_Enterprise" value="N" checked="checked">None
                        <input type="radio" name="s_Enterprise" value="S">Small
                        <input type="radio" name="s_Enterprise" value="M">Medium
                        <input type="radio" name="s_Enterprise" value="L">Large
                    </div>
                    <div class="form-group">
                        <label>Interested Services</label><br>
                        <input type="checkbox" name="ac" checked="checked"> Accountancy
                        <br>
                        <input type="checkbox" name="it"> Information Technology
                        <br>
                        <input type="checkbox" name="hr"> Human Resource
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" size=40 name="s_Email" required="vital" placeholder="me@example.com" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Age</label>
                        <input type="text" maxlength="2" size=2 name="n_Age" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea name="s_Message" class="form-control" rows="7"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-warning btn-block">Send</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <address>
                        <h4><i class="fa fa-university"></i> Corporate Headquarters</h4>
                    </address>
                    <p>
                        Some Avenue, New York 32320<br> <i class="fa fa-phone"></i> Phone: +1 800 999 9999<br> <i class="fa fa-fax"></i> Fax: +1 800 999 9999<br>
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
                        <a href="mailto:customer@abcglobal.com?Subject=Support%20Ticket"> Send E-mail to Support Department</a></p>
                    <h6>Network Planning</h6>
                    <p>Phone: +1 800 999 9999<br> Fax: +1 800 999 9999<br>
                        <a href="mailto:customer@abcglobal.com?Subject=Inquiry%20Ticket"> Send E-mail to Planning Department</a></p>
                    <h6>Web Master</h6>
                    <p>Phone: +1 800 999 9999<br> Fax: +1 800 999 9999<br>
                        <a href="mailto:customer@abcglobal.com?Subject=Website%20Ticket"> Send E-mail to Webmaster</a></p>
                </div>
            </div>
        </div>
    </form>
    <!----Main Footer---->
    <?php require_once('view/footer.php'); ?>    