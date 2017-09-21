<!DOCTYPE html>
<html>
<head>
    <title>Internship</title>
    <link href="css/custom/internship.css" rel="stylesheet">
    <?php include "parts/head.php" ?>
</head>
<body>
<?php include "parts/header.php" ?>
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
        <form id="internship-form">
            <div class="col-sm-5">
                <div class="textfields">
                    <div>
                        <label for="email">Email address <b>*</b></label>
                        <input id="email" type="email" placeholder="Your Email address" required>
                    </div>
                    <div>
                        <label for="firstname">First Name <b>*</b></label><br>
                        <input id="firstname" placeholder="First Name" required>
                    </div>
                    <div>
                        <label for="lastname">Last Name <b>*</b></label>
                        <input id="lastname" class="pull-right" placeholder="Lastname" required>
                    </div>
                </div>
            </div>
            <div class="col-sm-5 col-sm-offset-1">
                <div class="textfields">
                    <div>
                        <label for="cell-number">Phone number (Cell)</label>
                        <input id="cell-number" type="tel" placeholder="Your Phone Number (Cell)">
                    </div>
                    <div>
                        <label for="home-number">Phone number (Home)</label>
                        <input id="home-number" type="tel" placeholder="Your Phone Number (Home)">
                    </div>
                    <div class="radios">
                        <label for="">Which number is best to reach you? <b>*</b></label>
                        <input type="radio" name="phone-type" value="cell"> <span>Cell</span>
                        <input type="radio" name="phone-type" value="home"> <span>Home</span>
                    </div>
                    <div class="form-pagination">
                        <span>Page 1 of 2</span>
                        <button class="link-red pull-right">NEXT</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<?php include "parts/footer.php" ?>
</body>
</html>