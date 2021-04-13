<?php

namespace App\Http\Controllers;
use App\Models\afficher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AfficherController extends Controller
{
    public function afficher(){
        $datas= DB::select('SELECT niveau, name, FROM classes');
        dd($datas);
        return view('dashbord',['datas'=>$datas]);
    }


}
