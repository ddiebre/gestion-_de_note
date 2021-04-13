<?php

namespace App\Http\Controllers;
 use App\Models\Classes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassesController extends Controller
{
    public function classes(Request $request){
        $niveau = $request->input('niveau');
        $name = $request->input('name');

        DB::insert('insert into classes (niveau,name) values (?, ? )', [$niveau, $name]);
        return redirect('dashboard');
    }

}
