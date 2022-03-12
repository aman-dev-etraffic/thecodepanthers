<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class UserportfolioController extends Controller
{
    //
    public function index()
    {
        $data = Portfolio::all()->first();
        return view('auth.portfolio.userportfolio',compact('data'));
    }
}
