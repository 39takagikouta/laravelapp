<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(Request $request) {
        Log::debug('test');
        $items = Person::all();
        return view('person.index', ['items'=>$items]);
    }

    public function add(Request $request) {
        Log::debug('test2');
        return view('person.add');
    }
    public function create(Request $request) {
        Log::debug('test3');
        dd($request->all());
        Log::info('Method start');
        \Debugbar::debug('debug');
        $this->validate($request, Person::$rules);
        \Debugbar::debug('debug');
        $person = new Person;
        \Debugbar::debug('debug');
        $form = $request->all();
        \Debugbar::debug('debug');
        unset($form['_token']);
        \Debugbar::debug('debug');
        $person -> fill($form)->save();
        \Debugbar::debug('debug');
        return redirect('/person');
    }
}
