<?php

namespace App\Http\Controllers\Redactor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct() 
    {
        $this->middleware('redactor');
    }

    public function getRedactorDashboard() {
        return view('redactor.dashboard');
    }
}
