<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
  public  function index(){
    $userData = ["name" => "frank", "email" => "frank@gmail.com", "password" => "123", "age" => 21];
    return view('welcome', $userData);
    }
    public function show($id){
        return view('detail', ["data" => $id]);
    }
}
