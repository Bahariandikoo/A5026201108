<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showVaccineForm(){
        return view('htmlets');
    }

    function showForm(){
        return view('showgreetings');
    }

    function resultGreetings(){
        return view('tugas');
    }
}
