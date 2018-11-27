<?php

namespace App\Http\Controllers;

use App\Ticketinfor;
use App\Userinfo;
use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Redirect;

use App\Http\Requests\ContactFormRequest;

use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{


    //page index -- when loaded
    public function create()
    {  return view('contact');
    }

    // stores ticket info in the database
    public function store(Request $request)
    {
        //ticket validation
        $this->validate($request, [
            'firstName' => 'required|min:2|max:35',
            'lastName' => 'required|min:2|max:35',
            'email' => 'required|email',
            'OS' => 'required|max:20',
            'softwareIssue' => 'required|min:3|max:25',
            'additionalComments' => 'required|max:200',

        ]);

        // store tickets in database
        $allRequest = $request->all();

        //storing into userinfo table
        $userInfo = new Userinfo();
        $userInfo->firstName = $allRequest['firstName'];
        $userInfo->lastName = $allRequest['lastName'];
        $userInfo->email = $allRequest['email'];
        $userInfo->save();

        //storing into ticketinfor table
        $ticketInfo = new Ticketinfor();
        $ticketInfo->OS = $allRequest['OS'];
        $ticketInfo->softwareIssue = $allRequest['softwareIssue'];
        $ticketInfo->additionalComments = $allRequest['additionalComments'];

        //setting the pk/fk relation in the database
        $ticketInfo->userinfo_id = $userInfo->id;
        $ticketInfo->save();

        /* sessions */
        $request->session()->put('Userinfos', $userInfo);
        $request->session()->put('Ticketinfors', $ticketInfo);
        return view('confirm');
        /**return redirect()->route('contact') ->with('success','Request added successfully.
        Thanks for contacting us. We will get back to you as soon as possible!');  **/
    }
}
