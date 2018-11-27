<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticketinfor;

class TrackProgressCRUDController extends Controller
{
    // lists all the tickets
    public function index(Request $request)
    {
        $tickets= Ticketinfor::orderBy('id','DESC')->paginate(5);
        return view('TrackProgressCRUD.index',compact('tickets')) ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    // shows an specific ticket
    public function show($id)
    {
        $ticket= Ticketinfor::find($id);
        return view('TrackProgressCRUD.show',compact('ticket'));
    }


}
