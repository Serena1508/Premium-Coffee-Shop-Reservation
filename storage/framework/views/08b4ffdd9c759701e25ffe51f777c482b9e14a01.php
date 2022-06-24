<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/homepage.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>COFFEE SHOP | About Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<style>

body {
    background-image: url('css/img/bg2.png');
    font-family: 'Nunito', sans-serif;
}
  .about .content
{
    display: flex;
    justify-content: center;
    flex-direction: row;
    flex-wrap: wrap;
    margin-top: 40px;
}
.about .content .box
{
    width: 240px;
    margin: 20px;
    border: 8px solid #fff;
    box-shadow: 0 5px 35px rgba(50, 75, 99, 0.8);
    border-radius: 10px;
}
.about .content .box .imgBx
{

    position: relative;
    width: 100%;
    height: 250px;
}
.about .content .box .imgBx img
{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.about .content .box .text
{
    
    padding: 15px 0 15px;
    background-color: #fff;
}
.form {
  background-color: white;
  border-radius: 50px;
  box-sizing: border-box;
  height: 560px;
  padding: 20px;
  width: 800px;
}
.title2 {
  color: dark-red;
  font-family: sans-serif;
  font-size: 36px;
  font-weight: 600;
  margin-top: 30px;
}
.input-container {
  height: 50px;
  position: relative;
  width: 100%;
}
.ic1 {
  margin-top: 40px;
}

.ic2 {
  margin-top: 30px;
}
.input {
  background-color: black;
  border-radius: 12px;
  border: 0;
  box-sizing: border-box;
  color: #eee;
  font-size: 18px;
  height: 100%;
  outline: 0;
  padding: 4px 20px 0;
  width: 100%;
}
.input:focus ~ .cut,
.input:not(:placeholder-shown) ~ .cut {
  transform: translateY(8px);
}
.placeholder {
  color: white;
  font-family: sans-serif;
  left: 20px;
  line-height: 14px;
  pointer-events: none;
  position: absolute;
  transform-origin: 0 50%;
  transition: transform 200ms, color 200ms;
  top: 20px;
}

.input:focus ~ .placeholder,
.input:not(:placeholder-shown) ~ .placeholder {
  transform: translateY(-30px) translateX(10px) scale(0.75);
}

.input:not(:placeholder-shown) ~ .placeholder {
  color: #808097;
}

.input:focus ~ .placeholder {
  color: #dc2f55;
}
.submit {
  background-color: red;
  border-radius: 12px;
  border: 0;
  box-sizing: border-box;
  color: #eee;
  cursor: pointer;
  font-size: 18px;
  height: 50px;
  margin-top: 20px;
  // outline: 0;
  text-align: center;
  width: 30%;
}

.submit:active {
  background-color: #06b;
}



</style>
<body>


    

    <section class="about" id="about">
      
      <div class="title">
        <div class="column center">
        <br><br><br>
        <h2 class="titleText"><span>Coffee Premium Shop</span></h2>
        <h3  class="titleText2"><span> Team Members</span></h3>
        <br><br><br>
          <div class="content">
                
                <div class="content">
                <div class="box">
                    <div class="imgBx"><br>
                        <img src="css/img/about-us.jpg">
                </div>
                <div class="text">
                    <h3><b>Nurrdinan Serena</b></h3>
                    <p style="text-align: center;">CEO of Premium Coffee Shop<br><br>
                </div>
          </div>

          <div class="content">
                <div class="box">
                    <div class="imgBx"><br>
                        <img src="css/img/about-us.jpg">
                </div>
                <div class="text">
                    <h3><b>Nouran Elmughrabi</b></h3>
                    <p style="text-align: center;">Director Operations of Premium Coffee Shop<br><br>
                </div>
          </div>

          <!--1. Sabirina Saad Jama (1835578)
2. Serazum Marjan (2018010)
3. Laboni Akter (1822794)
4. Nurrdinan Serena binti Amer Shariffudin (2012998)
5. Nouran Ahmad Saleh Elmughrabi (1916440)-->

          <div class="content">
                <div class="box">
                    <div class="imgBx"><br>
                        <img src="css/img/about-us.jpg">
                </div>
                <div class="text">
                    <h3><b>Sabirina Saad Jama</b></h3>
                    <p style="text-align: center;">Manager Admin of Premium Coffee Shop<br><br>
                </div>
          </div>

          <div class="content">
                <div class="box">
                    <div class="imgBx"><br>
                        <img src="css/img/about-us.jpg">
                </div>
                <div class="text">
                    <h3><b>Serazum Marjan</b></h3>
                    <p style="text-align: center;">Manager Finance of Premium Coffee Shop<br><br>
                </div>
          </div>

          <div class="content">
                <div class="box">
                    <div class="imgBx"><br>
                        <img src="css/img/about-us.jpg">
                </div>
                <div class="text">
                    <h3><b>Laboni Akter</b></h3>
                    <p style="text-align: center;">Operation Manager of Premium Coffee Shop<br><br>
                </div>
          </div><br><br>
          
          
      </div>

      <div class="form">
      <div class="title2">Contact us if you have any inquiry!</div>
      <div class="input-container ic1">
        <input id="firstname" class="input" type="text" placeholder="Enter you name" />
        <div class="cut"></div>
        <label for="firstname" class="placeholder"><br></label>
      </div>
      <div class="input-container ic2">
        <input id="email" class="input" type="text" placeholder="Enter your email" />
        <div class="cut cut-short"></div>
        <label for="email" class="placeholder"><br></>
      </div>
      <div class="input-container ic2">
        <input id="lastname" class="input" type="text" placeholder="Enter Description/Questions" />
        <div class="cut"></div>
        <label for="lastname" class="placeholder"><br></label>
      </div><br>
      <button type="text" class="submit" value="Send">Submit</button>
    </div>

       
  </section>

    <script type="text/javascript">

        <!--Slide-->
        var myIndex = 0;
        carousel();
        function carousel() {
          var i;
          var x = document.getElementsByClassName("mySlides");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
          }
          myIndex++;
          if (myIndex > x.length) {myIndex = 1}
            x[myIndex-1].style.display = "block";
            setTimeout(carousel, 3000);
}
    </script>
  </body>
  </html>

<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\COFFEE_SHOP\resources\views/about.blade.php ENDPATH**/ ?>