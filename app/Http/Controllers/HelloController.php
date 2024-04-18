<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function __invoke(Request $request, Response $response) {
        return "{$request->path()}:{$response->content()}";
    }
}
