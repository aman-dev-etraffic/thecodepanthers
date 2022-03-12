<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    //
    public function index()
    {
        $user = Auth::User()->id;
        return view('auth.portfolio.portfolioform',['user' => $user]);
    }
    public function store(Request $request)
    {
        $messages = ['title.required' => 'Please fill the title'];
        $validator = Validator::make($request->all(),[
            'title' => 'required|max:250',
            'description' => 'required|max:355',
            'image' => 'required|mimes:jpeg,png,jpg|max:1024',
            'summary' => 'required|max:255',
            'clientname' => 'required|string|max:45',
            'clientreview' => 'required|string|max:350'
        ],$messages);
        if($validator->fails())
        {
            return redirect('/portfolio-form')->withErrors($validator)->withInput();
        }
         $userid = Auth::user()->id;
         $imageName = time().'-'.$request->file('image')->getClientOriginalName();
         $request->image->move(public_path('images'), $imageName);

         Portfolio::create([
            'customer_id' => $userid,
            'title' => $request['title'],
            'description' => $request['description'],
            'image' => $imageName,
            'summary' => $request['summary'],
            'client_name' => $request['clientname'],
            'client_review' => $request['clientreview']
         ]);
         
            return redirect('/user/display_all_portfolio/'.$userid);

    }

    public function getportfoliodata($id)
    {
        $data = Portfolio::where('customer_id',$id)->get();
        //$data = Portfolio::all()->where('customer_id',$id);
        return view('auth.portfolio.myportfolio',['data' => $data]);
    }
}
