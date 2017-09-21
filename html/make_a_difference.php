<!DOCTYPE html>
<html>
<head>
    <title>Make a Difference</title>
    <link href="css/custom/make-difference.css" rel="stylesheet">
    <link href="css/custom/donation.css" rel="stylesheet">
    <?php include "parts/head.php" ?>
</head>
<body>
<?php include "parts/header.php" ?>
<section id="make-difference">
    <div class="row">
        <div class="col-sm-6 text-center">
            <h1>MAKE A DIFFERENCE<br><span>DONATE TODAY!</span></h1>
            <p>The Circle of Friends for American Veterans is dedicated to rallying public opinion to solve the many
                challenges veterans face. </p>
            <img src="img/make-a-difference/make-difference.png" class="img-responsive center-block">
        </div>
        <div class="col-sm-6" id="donation">
            <form>
                <h2>MAKE YOUR DONATION</h2>
                <div>
                    <div class="donation-group">
                        <div class="radio-wrap">
                            <input id="d-15" type="radio" name="amount" value="15">
                        </div>
                        <label for="d-15">$15</label>
                    </div>
                    <div class="donation-group" style="margin-right: 0">
                        <div class="radio-wrap">
                            <input id="d-or" type="radio" name="amount" value="0">
                        </div>
                        <label for="d-or">OR</label>
                    </div>
                    <div class="donation-group donation-amount">
                        <input type="text" name="amount-custom" placeholder="$15">
                        <span>min $5</span>
                    </div>
                </div>
                <input type="submit" value="I WANT TO DONATE">
            </form>
            <p>Every donation goes directly to COFAVs Mission to end veteran homelessness, and hold the VA accountable
                to American Veterans.</p>
        </div>
    </div>
</section>
<section id="address">
    <div class="row">
        <div class="col-xs-12 text-center">
            <p>To donate by mail, send a check to:</p>
            <p><span>210 E. Broad St. # 202<br>
                    Falls Church, VA 22046<br>
                    ​703-237-8980<br>
                    Info@vetsvision.org
                </span></p>
            <a href="#" class="link-red">VIEW OUR MOST RECENT FINANCIAL STATEMENTS</a>
        </div>
    </div>
</section>
<?php include "parts/footer.php" ?>
<script src="js/custom/donate-form.js"></script>
</body>
</html>