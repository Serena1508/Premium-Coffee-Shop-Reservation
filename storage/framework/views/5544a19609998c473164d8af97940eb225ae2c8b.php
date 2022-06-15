
    <?php $__env->startSection('content2'); ?>

    		<!-- Reservation -->
		<div id="reservation" class="section">

			<!-- Backgound Image -->
            <div class="bg-image" style="background-image:url(assets/images/image1.jpg)"></div>
			<!-- /Backgound Image -->

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- reservation form -->
					<div class="col-md-6 col-md-offset-1 col-sm-10 col-sm-offset-1">
						<form class="reserve-form row" action="reservation.blade.php" method="POST">
							<div class="section-header text-center">
								<h2 class="title white-text">Book Your Table</h2>
							</div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">First Name:</label>
                                <input class="input" type="text" placeholder="First Name" required="required" id="f_name">
                        </div>



                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Last Name:</label>
                                        <input class="input" type="text" placeholder="Last Name" required="required" id="l_name">
                            </div>

							<div class="form-group">
									<label for="date">Date:</label>
									<input class="input" type="date" id="date">
							</div>

								<div class="form-group">
									<label for="number">Number of Guests:</label>
									<select class="input" id="number">
										<option>1 Person</option>
										<option>2 People</option>
										<option>3 People</option>
										<option>4 People</option>
										<option>5 People</option>
										<option>6 People</option>
									</select>
								</div>
								<div class="form-group">
								  <label for="time">Time:</label>
                                  <select class="input" id="time">
                                    <option>Morning (8:00 am - 11:am)</option>
                                    <option>Evening (14:00 pm - 18:00 pm)</option>
                                    <option>Night (19:00 pm - 23:00 pm)</option>
                                </select>
								</div>
							</div>


							<div class="col-md-12 text-center">
                                <input class="main-button" type="button" value="Book Now"
                                onclick="return confirm('Your reservation has been made!')"/>
							</div>

						</form>
					</div>
					<!-- /reservation form -->

					<!-- opening time -->
					<div class="col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1">
						<div class="opening-time row">
							<div class="section-header text-center">
								<h2 class="title white-text">Opening Time</h2>
							</div>
							<ul>
								<li>
									<h4 class="day">Sunday</h4>
									<h4 class="hours">8:00 am – 23:00 pm</h4>
								</li>
								<li>
									<h4 class="day">Monday</h4>
									<h4 class="hours">8:00 am – 23:00 pm</h4>
								</li>
								<li>
									<h4 class="day">Tuesday</h4>
									<h4 class="hours">8:00 am – 23:00 pm</h4>
								</li>
								<li>
									<h4 class="day">Wednesday</h4>
									<h4 class="hours">8:00 am – 23:00 pm</h4>
								</li>
								<li>
									<h4 class="day">Thursday</h4>
									<h4 class="hours">8:00 am – 23:00 pm</h4>
								</li>
								<li>
									<h4 class="day">Friday</h4>
									<h4 class="hours">8:00 am – 23:00 pm</h4>
								</li>
								<li>
									<h4 class="day">Saturday</h4>
									<h4 class="hours">8:00 am – 23:00 pm</h4>
								</li>
							</ul>
						</div>
					</div>
					<!-- /opening time -->

                <!-- your reservation -->
					<div class="col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1">
						<div class="opening-time row">
							<div class="section-header text-center">
								<h2 class="title white-text">Your Reservation</h2>
							</div>
                            <ul>
                            <li>
									<h4 class="f_name">First Name: Nurrdinan Serena</h4>
                                    <h4 class="l_name">Last Name: Amer Shariffudin</h4>
                                    <h4 class="date">Date: 16/06/2022</h4>
                                    <h4 class="number">Guest Number: 2 Person</h4>
                                    <h4 class="time">Time: Evening (14:00 pm - 18:00 pm)</h4>
							</li>

						</div>
					</div>
					<!-- /your reservation -->

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Reservation -->


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\coffee_project\resources\views/reservation.blade.php ENDPATH**/ ?>