<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Exception;

//add
use App\Ticketinfor;

class ProgressCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets= Ticketinfor::all();
        return $tickets;
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ticket= Ticketinfor::find($id);
        return $ticket;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        try {

            $this->validate($request, [
                'Status' => 'required',
                'Reply' => 'required',
            ]);
            
            $ticket = Ticketinfor::find($id);
            // updates and specific ticket in the ticket table depending on the id  and saves into the database
            $ticket->status = $request->Status;
            $ticket->Reply = $request->Reply;

            $saved = $ticket->save();

            if(!$saved){
                return array("status" => "ERROR");
            }
        }
        //error exception
        catch(Exception $e) {
            return array("status" => "ERROR");
        }

        return array("status" => "SUCCESS");;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $ticket = Ticketinfor::find($id);
            if ($ticket != null) {
                $ticket->delete();
            } else {
                return array("status" => "ERROR");
            }
        }
        catch(Exception $e) {
            return array("status" => "ERROR");
        }

        return array("status" => "SUCCESS");
    }

    // when helpdesk adds the priority and escLevel we use this method
    public function helpdesk(Request $request, $id)
    {


        try {
            $this->validate($request, [
                'priority' => 'required|alpha',
                'escLevel' => 'required|numeric',
            ]);

            // updates and specific ticket in the ticket table depending on the id  and saves into the database
            $ticket = Ticketinfor::find($id);
            $ticket->priority = $request->priority;
            $ticket->escLevel = $request->escLevel;

            $saved = $ticket->save();

            if(!$saved){
                return array("status" => "ERROR");
            }
        }
            //error exception
        catch(Exception $e) {
            return array("status" => "ERROR");
        }

        return array("status" => "SUCCESS");
    }

    //when tech staff change escLevel we use this method
    public function tech(Request $request, $id)
    {
 
        try {
            $this->validate($request, [
                'escLevel' => 'required|numeric',
            ]);

            // updates and specific ticket in the ticket table depending on the id  and saves into the database
            $ticket = Ticketinfor::find($id);
            $ticket->escLevel = $request->escLevel;
            $saved = $ticket->save();

            if(!$saved){
                return array("status" => "ERROR");
            }
        }
            //error exception
        catch(Exception $e) {
            return array("status" => "ERROR");
        }

        return array("status" => "SUCCESS");
    }
}
