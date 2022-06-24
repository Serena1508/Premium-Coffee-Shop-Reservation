<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">

        <title>COFFEE SHOP | Reservation</title>

    </head>

    <body>

        

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
            <?php $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($reservation['f_name']); ?></td>
                <td><?php echo e($reservation['l_name']); ?></td>
                <td><?php echo e($reservation['time']); ?></td>
                <td><?php echo e($reservation['date']); ?></td>
                <td><?php echo e($reservation['guest_Num']); ?></td>

            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>

    </div>
    </body>
</html>
<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\COFFEE_SHOP\resources\views/reservation.blade.php ENDPATH**/ ?>