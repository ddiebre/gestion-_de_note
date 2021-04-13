<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('superadmin'))
        {
            $datas=Classes::all();
            $datas1=Classes::all();
            $datas2=Classes::all();
            $data1=User::all();
            return view('superdash',['datas'=>$datas,'data1'=>$data1,'datas1'=>$datas1,'datas2'=>$datas2]);
        }

        elseif(Auth::user()->hasRole('admin'))
        {
            return view('admindash');
        }
        elseif(Auth::user()->hasRole('eleve'))
        {
            return view('dashboard');
         }
    }
}

