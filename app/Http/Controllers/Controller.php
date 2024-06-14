<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    function index(){
$Contact = Contact::all();
return view('welcome',[

    "contacts" => $Contact

]


);
    }
}
