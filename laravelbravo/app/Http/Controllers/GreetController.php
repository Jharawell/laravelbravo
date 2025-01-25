<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GreetController extends Controller
{
   public function greet(){
    $name = 'Jharawell';
    return view("greet", ['name'=> $name]);
   }
}