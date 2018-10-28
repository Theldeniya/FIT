<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\instruments;

class instrumentController extends Controller
{
    public function insertI(Request $request){
        $input=new instruments([
            'Iname'=>$request->Iname,
            'Itype'=>$request->Itype,
        ]);
        $input->save();
        $inputs=instruments::all();
        return response()->json($inputs);
    }
}
