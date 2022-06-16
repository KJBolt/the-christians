<?php

namespace App\Http\Controllers;

use App\Models\NewLetter;
use Illuminate\Http\Request;

class NewsLetter extends Controller
{
    public function index(){
        $newsletters = NewLetter::latest()->paginate(5);
        return view('dashboard/subscribers',compact('newsletters'));
    }
}
