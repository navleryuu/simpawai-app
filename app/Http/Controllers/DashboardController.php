<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $pengaduan = Pengaduan::count();
        $user = User::count();
        return view('dashboard.index', compact('user','pengaduan'));
        
    }


}
