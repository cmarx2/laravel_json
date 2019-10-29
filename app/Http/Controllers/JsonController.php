<?php

namespace App\Http\Controllers;
use App\Test;
use Redirect,Response;
use Illuminate\Http\Request;


class JsonController extends Controller
{
    public function index()
    {
        return view('json_form');
    }

    public function store(Request $request)
    {
        $data = $request->only('name', 'email', 'mobile_number');
        $test['token'] = time();
        $test['data'] = json_encode($data);
        Test::insert($test);
        return Redirect::to("laravel-json")->withSuccess('Great! Data stored succesffully!');
    }

}
