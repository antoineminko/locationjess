<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClientController extends Controller
{
   public function clientDashboard():View
   {
    return view('client.index');
   }
}
