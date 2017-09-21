<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link href="css/custom/contact-us.css" rel="stylesheet">
    <?php include "parts/head.php" ?>
</head>
<body>
<?php include "parts/header.php" ?>
<section id="contact">
    <div class="row">
        <div class="col-sm-6 text-center">
            <h1>CONTACT US</h1>
            <p>Circle of Friends for American Veterans<br>​DBA: American Homeless Veterans.</p>
            <strong>
                        Phone: 703-237-8980<br>
                        Fax: 703-237-8976<br>
                        E-Mail: info@vetsvision.org<br>
                        Address: 210 East Broad St. #202<br>
                        Falls Church, VA   22046<br>
                    </strong>
            <img src="img/contact-us/letter.png" class="img-responsive center-block">
        </div>
        <div class="col-sm-6">
            <form id="contact-form">
                <div class="textfields">
                    <div class="text-justify">
                        <label for="firstname">Name *</label><br>
                        <input id="firstname" placeholder="First Name">
                        <input id="lastname" class="pull-right" placeholder="Surname">
                    </div>
                    <div>
                        <label for="email">Email address *</label>
                        <input id="email" type="email" placeholder="Your Email address">
                    </div>
                    <div>
                        <label for="number">Phone number *</label>
                        <input id="number" type="tel" placeholder="160646542316">
                    </div>
                    <div>
                        <label for="">Message *</label>
                        <input placeholder="Leave a message">
                    </div>
                </div>
                <div class="subscription">
                    <div>
                        <input id="updates" type="checkbox">
                        <label for="updates">I want to receive email<br> updates</label>
                    </div>
                    <input type="submit" class="link-red pull-right" value="SEND">
                </div>

            </form>
        </div>
    </div>
</section>
<?php include "parts/footer.php" ?>
</body>
</html>