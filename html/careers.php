<!DOCTYPE html>
<html>
<head>
    <title>Careers</title>
    <link href="css/custom/careers.css" rel="stylesheet">
    <link href="css/custom/internship.css" rel="stylesheet">
    <?php include "parts/head.php" ?>
</head>
<body>
<?php include "parts/header.php" ?>
<section id="careers">
    <div class="row">
        <div class="col-sm-6 col-sm-push-6">
            <img src="img/careers/careers.jpg" class="img-responsive">
        </div>
        <div class="col-sm-6 col-sm-pull-6 text-center">
            <div class="careers-text">
                <h1>CAREERS</h1>
                <h4>LOOKING FOR A NEW JOB?</h4>
                <p>We are looking for enthusiastic employees who have a background in Communications, Operation Management
                    and any other service in the government legislation. Please fill out the application below.</p>
                <img src="img/careers/hands.png" class="img-responsive center-block">
            </div>
        </div>
    </div>
</section>
<section id="internship-application">
    <div class="row">
        <div class="col-xs-12 text-left">
            <h2>CAREER APPLICATION</h2>
            <p>Please  answer all the questions below to the best of your ability. </p>
        </div>
    </div>
    <div class="row">
        <?php include "parts/career-form.php" ?>
    </div>
</section>
<?php include "parts/footer.php" ?>
</body>
</html>