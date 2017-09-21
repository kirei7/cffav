<!DOCTYPE html>
<html>
<head>
    <title>Sign the Veterans' Bill of Rights</title>
    <link href="css/custom/sign-bill.css" rel="stylesheet">
    <?php include "parts/head.php" ?>
</head>
<body>
<?php include "parts/header.php" ?>
<section id="sign-bill">
    <div class="row">
        <div class="col-sm-6">
            <div>
                <h1>
                    SIGN THE VETERANS' BILL OF RIGHTS
                </h1>
                <p><b>Several government investigations show that the Department of Veteran Affairs wastes billions of
                        dollars annually.
                        This information will be PRIVATE and not solicited.</b></p>
                <p>In a few simple steps, the VA could save this money and instead use it to help the 3.3 million disabled
                    veterans, the 573,000 unemployed veterans, and the 120,000 homeless veterans.
                    Call on Congress to hold the VA accountable and help these veterans by signing the petition below. </p>
            </div>
        </div>
        <div class="col-sm-6 signform">
            <div>
                <form id="sign-form">
                    <div class="textfields">
                        <div class="text-justify">
                            <label for="firstname">Name *</label><br>
                            <input id="firstname" placeholder="First Name">
                            <input id="surname" class="pull-right" placeholder="Surname">
                        </div>
                        <div>
                            <label for="zipcode">Zip Code *</label>
                            <input id="zipcode" type="text" placeholder="Your Zip Code">
                        </div>
                        <div>
                            <label for="age">Phone number *</label>
                            <input id="age" type="text" placeholder="Your Age">
                        </div>
                        <div>
                            <label for="">Message *</label>
                            <input placeholder="Leave a message">
                        </div>
                    </div>
                    <div class="submit">
                        <input type="submit" class="link-red pull-right" value="SUBMIT">
                        <span>Every signature helps to finally get the government to Put Vets First!</span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include "parts/footer.php" ?>
</body>
</html>