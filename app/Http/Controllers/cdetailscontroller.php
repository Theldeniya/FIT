<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cdetails;

class cdetailscontroller extends Controller
{
    public function insertC(Request $request)
    {
        $input = new Cdetails([

            'first_name' => $request->F_name,
            'last_name' => $request->L_name,
            'email' => $request->E_mail,
            'password' => $request->Password,
            'phone_number' => $request->P_number,
        ]);
        $input->save();
        $inputs = Cdetails::all();
        return response()->json($inputs);
    }
}
