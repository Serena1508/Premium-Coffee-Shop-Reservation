<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reservationController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    function getData(Request $req)
    {
        return $req->input();
    }

}
