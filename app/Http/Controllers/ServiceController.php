<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::all();
        return view('index', ['services' => $services]);
    }
}
