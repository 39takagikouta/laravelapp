<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index() {
        $date = ["msg"=>"これはコントローラー"];
        return view('hello.index', $date);
    }
    public function post(Request $request) {
        $msg =$request->msg;
        $date = ["msg"=>"こんにちは". $msg . 'さん'];
        return view('hello.index', $date);
    }
}
