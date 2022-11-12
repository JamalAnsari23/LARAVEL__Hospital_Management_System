 <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyAPI extends Controller
{
    function getData()
    {
        return ["Name"=>"Jamal","Email"=>"mdjamalansari939@gmail.com","Address"=>"Buddha Colony "];

    }
}
 