
    @extends('layouts.master')
    @section('content2')
    <div class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="hero-cta">
                        <h1>Premium Coffee Shop</h1>
                        <button class="reservation-btn hover-up">
                            <a href="reservation">Make Reservation</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-us mb-20 py-10" style="margin-top: 20px">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center align-content-center">
                    <div class="about-us d-flex align-items-center flex-column justify-content-center">
                        <h1>Who we are</h1>

                        <p>
                        Welcome to the world of Premium Coffee Shop: a zone where good vibes gather and bad moods disappear. Breathe in the heady aroma of fresh-ground, fresh-brewed coffee from beans picked the world over. Get comfortable with our smooth tunes. Savour your every sip, bite and moment with us. The rest of the world can wait.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-container">
                        <img src="assets/images/who-we-are.png" alt="" srcset="" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-us mb-20 py-10">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center align-content-center">
                    <div class="about-us d-flex align-items-center flex-column justify-content-center">
                        <h1>What we do</h1>

                        <p>We source our coffee beans from the best farms on the planet. Then our roastmaster transforms them into blends and roasts that will satisfy to the very last drop. Voila: invigoration, inspiration and joy in a cup, served piping hot or refreshingly cold.</p>

                        <div class="social-icons">
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-instagram"></i>
                            <i class="fa-brands fa-facebook"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-container">
                        <img src="assets/images/who-we-are.png" alt="" srcset="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>
    @endsection