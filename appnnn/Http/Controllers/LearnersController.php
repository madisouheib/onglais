<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Languages;
class LearnersController extends Controller
{



 public function register_learner()

    {

$lang = Languages::all();


               return view('auth.register_learner');
    }




}
