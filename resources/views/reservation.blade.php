<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">

        <title>COFFEE SHOP | Reservation</title>

    </head>

    <body>

        @extends('navbar')

    <div class="container" >
        <a href="newreservation"  style="float:right"><i class="fa fa-user-plus" style="font-size:35px;color:red"></i></a>
        <p class="titles" >Reservation</p>

        <hr><br>
        <table class="content">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Time</th>
                <th>Reservation Date </th>
                <th>Reservation Guest Number</th>

            </tr>
            @foreach ($reservations as $reservation)
            <tr>
                <td>{{$reservation['f_name']}}</td>
                <td>{{$reservation['l_name']}}</td>
                <td>{{$reservation['time']}}</td>
                <td>{{$reservation['date']}}</td>
                <td>{{$reservation['guest_Num']}}</td>

            </tr>
            @endforeach
        </table>

    </div>
    </body>
</html>