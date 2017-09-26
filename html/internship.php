<!DOCTYPE html>
<html>
<head>
    <title>Internship</title>
    <link href="css/custom/internship.css" rel="stylesheet">
    <?php include "parts/head.php" ?>
</head>
<body>
<?php include "parts/header.php" ?>
<div class="row nav-submenu">
    <div class="col-xs-12">
        <ul class="nav nav-pills">
            <li><a href="index.php">Home</a></li>
            <li><a href="press_release.php">Contact Us</a></li>
            <li><a href="press_release_detail.php">Internship</a></li>
        </ul>
    </div>
</div>
<section id="internship">
    <div class="row">
        <div class="col-sm-6 col-sm-push-6">
            <img src="img/internship/interns.jpg" class="img-responsive">
        </div>
        <div class="col-sm-6 col-sm-pull-6 text-center">
            <div class="internship-text">
                <h1>INTERSHIP</h1>
                <h4>INTERNSHIP POSITIONS ARE OPEN NOW!</h4>
                <p><b>We are looking for interns for each School semester!</b></p>
                <p>Each semester The Center for American Homeless Veterans & the Circle of Friends for American Veterans
                    hosts a team of dedicated, bright interns or Program Coordinators, to support and work directly on
                    the legislative and advocacy programs of the organization.</p>
            </div>
        </div>
    </div>
</section>
<section id="internship-application">
    <div class="row">
        <div class="col-xs-12 text-left">
            <h2>INTERNSHIP APPLICATION</h2>
            <p>Please fill the form</p>
        </div>
    </div>
    <div class="row">
        <?php include "parts/career-form.php" ?>
    </div>
</section>
<?php include "parts/footer.php" ?>
</body>
</html>