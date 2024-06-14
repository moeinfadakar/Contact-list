<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;


class addNewControllerprocess extends Controller
{
    //
    function insert(Request $Request){
     $contact = new contact();
     $contact->name = $Request["name"];
     $contact->number = $Request["number"];
     $contact->email = $Request["email"];
     $contact->family = $Request["family"];
     $contact->house = $Request["house"];
     $contact->save();

     return redirect()->to('/');

    }
}
