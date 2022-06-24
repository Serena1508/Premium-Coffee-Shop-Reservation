<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\reservation;

class ReservationController extends Controller
{
    function show()
    {
       $data= reservation ::all();
        return view('reservation',['reservations'=>$data]);

    }

    public function index()
    {
        return view('newreservation');
    }

    public function store(Request $request)
    {
        $data = new reservation;
        $data->f_name  = $request->f_name;
        $data->l_name  = $request->l_name;
        $data->time = $request->time;
        $data->date = $request->date;
        $data->guest_Num = $request->guest_Num;
        $data->save();
        return redirect('reservation');
    }
}
