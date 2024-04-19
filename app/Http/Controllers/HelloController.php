<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index(Request $request) {
        $items = DB::select('select * from people');
        return view('hello.index', ['data'=>$request->data, 'items' => $items]);
    }
    public function post(Request $request) {
        $msg =$request->msg;
        $date = ["msg"=>"こんにちは". $msg . 'さん'];
        return view('hello.index', $date);
    }
}
