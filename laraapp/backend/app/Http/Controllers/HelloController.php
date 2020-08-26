<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    // # Section 2
    // public function index($id='no-id', $pass="no-pass"){
    //     return "{$id}, {$pass}";
    // }

    // public function index_req_and_res(Request $request, Response $response) {
    //     return "<h1>This is request</h1><br>
    //             {$request}<br><br>
    //             <h1>This is response</h1><br>
    //             {$response}";
    // }


    # Section 3
    public function index_php(){
        $data1 = [
            "msg" => "This is message from controller"
        ];

        $data2 = 123;
        return view("hello.index", compact('data2'))->with('data1',$data1);
    }

    public function index_php_refer($id="no-id"){
        return view("hello.refer_val", compact("id"));
    }

    public function index_query(Request $request){
        $msg = [
            "query" => $request->id
        ];
        return view("hello.query",compact("msg"));
    }

    public function index_blade(){
        $data = [
            "msg" => "This is message from controller throught the blade file"
        ];

        return view("hello.index_blade", compact("data"));
    }

    public function index_form(){
        return view("hello.index_form");
    }

    public function post(Request $request){
        $data = [
            "msg" => $request->msg
        ];
        return view("hello.post", compact("data"));
    }

    public function index_if(Request $request){
        $msg = $request->msg;
        return view("hello.index_if", compact("msg"));
    }

    public function index_unless(Request $request){
        $msg = $request->msg;
        return view("hello.index_unless", compact("msg"));
    }

    public function index_empty(Request $request){
        $msg = $request->msg;
        return view("hello.index_empty", compact("msg"));
    }

    public function index_isset(Request $request){
        $msg = $request->msg;
        return view("hello.index_isset", compact("msg"));
    }

    public function index_for(){
        return view('hello.index_for');
    }

    public function index_foreach(){
        return view('hello.index_foreach');
    }

    public function index_forelse(){
        return view('hello.index_forelse');
    }

    public function index_while(){
        return view('hello.index_while');
    }
}
