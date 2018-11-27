<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
   // access session data
    public function accessSessionData(Request $request){
        if($request->session()->has('myKey'))
            echo $request->session()->get('myKey');
        else
            echo 'No data in the session';
    }

    // store session data
    public function storeSessionData(Request $request, $value){
        $request->session()->put('myKey', $value);
        echo "Data has been added to session";
    }

    // delete session data
    public function deleteSessionData(Request $request){
        $request->session()->forget('myKey');
        echo "Data has been removed from session.";
    }
}
