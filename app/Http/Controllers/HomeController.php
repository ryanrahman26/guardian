<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laratrust\LaratrustFacade as Laratrust;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Laratrust::hasRole('admin')) return $this->adminDashboard();
        if (Laratrust::hasRole('staff')) return $this->staffDashboard();
        if (Laratrust::hasRole('member')) return $this->memberDashboard();

        // If no Role, show login
        return view('login');
    }

    protected function adminDashboard() {
        return view('dashboard.admin');
    }

    protected function staffDashboard() {
        return view('dashboard.staff');
    }

    protected function memberDashboard() {
        return view('dashboard.member');
    }
}
