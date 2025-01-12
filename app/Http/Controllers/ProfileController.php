<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Cookie;

class ProfileController extends Controller
{
    public function index($id)
    {
        $name = "Donal Trump";
        $age = "75";

        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        $name = 'access_token';
        $value = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = request()->getHost(); 
        $secure = false;
        $httpOnly = true;


        $cookie = cookie($name, $value, $minutes, $path, $domain, $secure, $httpOnly);

        return response()->json($data, 200)->cookie($cookie);
    }
}
