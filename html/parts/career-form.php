<form id="career-form">
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
        </div>
    </div>
    <div class="col-xs-12">
        <div class="form-pagination text-center">
            <span>Page 1 of 2</span>
            <button class="link-red pull-right">NEXT</button>
        </div>
    </div>
</form>