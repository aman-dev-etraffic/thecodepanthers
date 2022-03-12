<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApprovedformController extends Controller
{
    //
    public function index()
    {
        return view('auth.approvedform');
    }

    public function approvalform()
    {
        return view('auth.portfolio.userportfolioapprovalform');

    }
}
