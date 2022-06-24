<!DOCTYPE html>
<html>
<head>
    <title>COFFEE SHOP | New Reservation</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="">
    <link href="css/menu.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
</head>
<body>

    @extends('navbar')

    <br><br><br><br><br>
  <div class="container mt-4" style="  width:50%; height:400px ">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="our-menu mb-20 py-10" style="margin-top: 50px">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="section-title text-center">
                        <h2>OUR MENU</h2>
                        <div class="divider-container">
                        
                            <div class="horizontal-divider-our-menu"></div>
                            </div>
                            <br><br>
                            <h1 style="font-family: 'Brush Script MT', cursive;">Coffée</h1>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 hover-up" style="margin-bottom: 10px;">
                    <div class="single-menu-item">
                        <div class="coffe-img-container">
                        <img src="\css\img\cofeee.jpg" class="coffe-img-container" alt="...">
                        </div>
                        <div class="coffe-description">
                            <h2 style=" font-family: 'Times New Roman', serif;">Latte</h2>
                            <hr style="width:50%;text-align:left;margin: left 5px;">
                            <p>Espresso + steamed milk + (a little bit of) frothed milk</p>
                            <br><br><br>
                            <h4>Price: RM 17.00</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 hover-up" style="margin-bottom: 10px;">
                    <div class="single-menu-item">
                        <div class="coffe-img-container">
                        <img src="\css\img\ice blended.jpg" class="coffe-img-container" alt="...">
                        </div>
                        <div class="coffe-description">
                            <h3 style=" font-family: 'Times New Roman', serif;">Ice blended coffée</h3>
                            <hr style="width:50%;text-align:left;margin: left 5px;">
                            <p>A sweet treat made from our delicious coffee extract, signature powders, and milk is blended with ice then topped with whipped cream.</p>
                            <h4>Price: RM 19</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 hover-up" style="margin-bottom: 10px;">
                    <div class="single-menu-item">
                        <div class="coffe-img-container">
                        <img src="\css\img\cap.jpg" class="coffe-img-container" alt="...">
                            <div class="coffe-img cappacino"></div>
                        </div>
                        <div class="coffe-description">
                            <h3 style=" font-family: 'Times New Roman', serif;">Cappuccino</h3>
                            <hr style="width:50%;text-align:left;margin: left 5px;">
                            <p>hot, frothy drink with a creamy top, milky middle, and full-bodied brew at the bottom. Made with ⅓ espresso, ⅓ steamed milk, and ⅓ frothed milk </p>
                           
                            <h4>Price: RM 15.00</h4>
                        </div>
                    </div>
                </div>
                 <!---->
    
    <div class="our-menu mb-20 py-10" style="margin-top: 50px">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="section-title text-center">
                    <h1 style="font-family: 'Brush Script MT', cursive;">Desserts</h1>
                        
                            
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4 hover-up" style="margin-bottom: 10px;">
                    <div class="single-menu-item">
                        <div class="coffe-img-container">
                        <img src="\css\img\Cheesecake.jpg" class="coffe-img-container" alt="...">
                        </div>
                        <div class="coffe-description">
                            <h2 style=" font-family: 'Times New Roman', serif;">cheesecake</h2>
                            <hr style="width:50%;text-align:left;margin: left 5px;">
                            <p>a dessert consisting of a thick, creamy filling of cheese, eggs, and sugar over a thinner crust and topped with sweet or sometimes salty items</p>
                            <h4>Price: RM 12.00</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 hover-up" style="margin-bottom: 10px;">
                    <div class="single-menu-item">
                        <div class="coffe-img-container">
                        <img src="\css\img\appleturnover.jpg" class="coffe-img-container" alt="...">
                        </div>
                        <div class="coffe-description">
                            <h3 style=" font-family: 'Times New Roman', serif;">Apple Turnover</h3>
                            <hr style="width:50%;text-align:left;margin: left 5px;">
                            <p>A pastry dessert filled with pieces of sweetened apples, with the pastry folded over to enclose the filling.</p>
                            <br><br>
                            <h4>Price: RM 8.00</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 hover-up" style="margin-bottom: 10px;">
                    <div class="single-menu-item">
                        <div class="coffe-img-container">
                        <img src="\css\img\chocolate.webp" class="coffe-img-container" alt="...">
                        </div>
                        <div class="coffe-description">
                            <h3 style=" font-family: 'Times New Roman', serif;">chocolate cake</h3>
                            <hr style="width:50%;text-align:left;margin: left 5px;">
                            <p>A soft, buttery, cakey vanilla-scented dough flecked with melting milk chocolate chips.</p>
                            <br><br>
                            <h4>Price: RM 10.00</h4>
                        </div>
                    </div>
                </div>
                </body>
</html>
