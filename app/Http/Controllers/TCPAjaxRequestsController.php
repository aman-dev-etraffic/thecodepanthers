<?php

namespace App\Http\Controllers;
use App\Models\State;
use App\Models\Country;
use App\Models\User;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApprovedUserProfile;
use App\Mail\ApproveUserPortfolio;

class TCPAjaxRequestsController extends Controller
{
    public function getStates($country_id)
    {
        $data = State::where('country_id', $country_id)->get();
        return response()->json(['data' => $data]);
    }

    public function approveprofile($id)
    {
       $user = User::find($id);
       $user->approved = 1;
       $user->save();
       Mail::to($user->email)->send(new ApprovedUserProfile($user));
       return response()->json(['data' => 'saved']);

    }

    public function approveuserportfolio($id)
    {
        $userportfolio = Portfolio::find($id);
        $userportfolio->approved = 1;
        $userportfolio->save();
        $customerid = $userportfolio->customer_id;
        $user = User::where('id',$customerid)->first();
        Mail::to($user->email)->send(new ApproveUserPortfolio($user));
        return response()->json(['data' => 'saved']);        
    }
}
