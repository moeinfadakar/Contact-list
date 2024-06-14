<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class deleteController extends Controller
{
    //

    function delete(){
        Contact::truncate();

return redirect()->to('/');
    }


}
