<!DOCTYPE html>
<html>
<head>
    <title>Donate now</title>
    <link href="css/custom/donation.css" rel="stylesheet">
    <?php include "parts/head.php" ?>
</head>
<body>
<?php include "parts/header.php" ?>
<section id="donation">
    <div class="row">
        <div class="col-sm-6">
            <div class="donation-text text-center">
                <h1>DONATE NOW!</h1>
                <img src="img/donation/donation-icon.png" class="img-responsive">
                <p>Founded in 1993, Circle of Friends for American Veterans (COFAV) educates Congress and the public
                    about the challenges facing American Veterans, in order to compel the Congress to address these
                    glaring issues.</p>
            </div>
        </div>
        <div class="col-sm-6">
            <form id="donation-full">
                <h2>CHOOSE A DONATION AMOUNT</h2>
                <div>
                    <div class="donation-group">
                        <div class="radio-wrap">
                            <input id="d-15" type="radio" name="amount" value="15">
                        </div>
                        <label for="d-15">$15</label>
                    </div>
                    <div class="donation-group">
                        <div class="radio-wrap">
                            <input id="d-25" type="radio" name="amount" value="25">
                        </div>
                        <label for="d-25">$25</label>
                    </div>
                    <div class="donation-group">
                        <div class="radio-wrap">
                            <input id="d-50" type="radio" name="amount" value="50">
                        </div>
                        <label for="d-50">$50</label>
                    </div>
                    <div class="donation-group">
                        <div class="radio-wrap">
                            <input id="d-75" type="radio" name="amount" value="75">
                        </div>
                        <label for="d-75">$75</label>
                    </div>
                    <div class="donation-group">
                        <div class="radio-wrap">
                            <input id="d-100" type="radio" name="amount" value="100">
                        </div>
                        <label for="d-100">$100</label>
                    </div>
                    <br>
                    <div class="donation-group">
                        <div class="radio-wrap">
                            <input id="d-or" type="radio" name="amount" value="0">
                        </div>
                        <label for="d-or">OR</label>
                    </div>
                    <div class="donation-group donation-amount">
                        <input type="text" name="amount-custom" placeholder="$15">
                        <span>min $5</span>
                    </div>
                    <p>Every donation goes directly to COFAVs Mission to end veteran homelessness, and hold the VA
                        accountable to American Veterans.</p>

                    <div class="donation-group donate-monthly">
                        <input id="d-monthly" type="checkbox" name="donate-monthly">
                        <label for="d-monthly">Donate monthly</label>
                    </div>

                    <input type="submit" value="DONATE NOW">

                </div>
            </form>
        </div>

    </div>
</section>
<script src="js/custom/donate-form.js"></script>
<?php include "parts/footer.php" ?>
</body>
</html>