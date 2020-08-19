<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{
//    public function  __construct(){
//        $this -> middleware('auth')->except('showString2');
//    }
    public  function  showUserName()
    {
        return 'Sam Kad';
    }

    public  function  index()
    {
        return 'index';
    }

    public  function  showString1()
    {
        return "string 1";
    }

    public  function  showString2()
    {
        return "string 2";
    }

    public  function  showString3()
    {
        return "string 3";
    }
    public  function getIndex()
    {

        $obj = new \stdClass();
        $obj -> id = 30;
        $obj -> name = "sam";
        $obj -> gender = "female";
        //$data = ['a'=>'ahmad','b' => 'barney', 'c'=> 'carry'];
        //$data = ['ahmad','barney',  'carry'];
        $data = [];
        return view('welcome',compact('data'))->with('name','samo');
    }
}
