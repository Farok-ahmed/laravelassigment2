<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class ProfileController extends Controller
{
    function index($id){
        $name = "Donal Trump";
        $age = "75";
        $data=[
            'id'=>$id,
            'name'=>$name,
            'age'=>$age
        ];

        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        
        return response()->json($data)->Cookie($cookieName, $cookieValue, $minutes, $path, $domain, $secure, $httpOnly);

    }
}
