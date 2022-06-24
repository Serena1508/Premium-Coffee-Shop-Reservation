<!DOCTYPE html>
<html>
<head>
    <title>COFFEE SHOP | New Reservation</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/homepage.css" rel="stylesheet">
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
  <div class="titles">
    Make New Reservation <hr>
  </div>
  <div class="card" >

    <div class="card-body">
      <form name="newreservation" id="newreservation" method="post" action="{{url('save')}}">
       @csrf

       <div class="form-group">
        <input type="text" id="f_name" name="f_name" class="form-control" placeholder="Enter First Name" required="">
      </div>

      <div class="form-group">
        <input type="text" id="l_name" name="l_name" class="form-control" placeholder="Enter Last Name" required="">
      </div>

          <div class="form-group">
            <input type="time" id="time" name="time" class="form-control" placeholder="Time " required="">
          </div>

          <div class="form-group">
          <input type="date" id="date" name="date" class="form-control" placeholder="Date" required="">
        </div>

        <div class="form-group">
          <input type="guest_Num" id="guest_Num" name="guest_Num" class="form-control" placeholder="Guest Number" required="">
        </div>


        <button type="submit" class="btn btn-primary " style="  margin: 0;position: absolute; top: 110%; width:50%; left:25%">Submit</button>
      </form>
    </div>
    </div>
  </div>
</div>
</body>
</html>
