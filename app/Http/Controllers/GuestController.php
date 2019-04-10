<?php

namespace App\Http\Controllers;

use App\Client;
use App\Team;
use Illuminate\Http\Request;

class GuestController extends Controller
{

    public function index()
    {
        $guests = Client::all('name','surname','address','mailing_address');

        return view('front.guests', compact('guests'));
    }

}
