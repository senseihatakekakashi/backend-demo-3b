<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiIntegrationController extends Controller
{
    public function getUsers()
    {
        $response = Http::get("https://jsonplaceholder.typicode.com/users");

        if($response->failed()) {
            return ['error' => 'Api Unavailable'];
        }

        return $response->json();
    }

    public function createUser(Request $request)
    {
        $response = Http::post("https://jsonplaceholder.typicode.com/users", $request->all());
        return $response->json();
    }
}
