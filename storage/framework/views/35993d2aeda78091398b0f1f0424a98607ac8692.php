
    
    <?php $__env->startSection('content2'); ?>
   
    <div class="make-resevation-section py-10 mb-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="margin-bottom: 15px;">
                    <div class="section-title text-center">
                        <h3>Make reservation</h3>
                        <div class="divider-container">
                            <div class="horizontal-divider-reservation"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-section">
                <div class="container-fluid">
                    <div class="col-md-4">
                        <form action="" class="input-container">
                            <input placeholder="Name" class="input-outline" type="text" name="" id="" value="Name">
                            <input placeholder="Time of reservation" class="input-outline" type="text" name="" id=""
                                value="Time of reservation">
                            <input placeholder="Done" class="input-outline" type="submit" name="" id="">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-us py-10 mb-20">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-img">
                        <h3>Contact us </h3>
                        <img src="assets/images/expresso.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center justify-content-center">
                    <div class="contact-form">
                        <form action="" class="contact-form">
                            <input type="text" name="" id="" placeholder="Name">
                            <input type="text" name="" id="" placeholder="Email">
                            <input type="text" name="" id="" placeholder="Message">
                            <input class="orange-button" type="submit" value="Send">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>
    <!--cont-->
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\coffee_project\resources\views/contact.blade.php ENDPATH**/ ?>