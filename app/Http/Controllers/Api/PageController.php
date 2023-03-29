<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function test(){

        // response che creo per le chiamate
        $response = [
            'success' => true,
            'code' => 200,
            'message' => 'Ok',
            'data' => [
                1, 2, 3
            ]
        ];

        // ritorno la response in formato json
        return response()->json($response);
    }
}
