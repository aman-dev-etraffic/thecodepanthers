<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\Portfolio;
use Auth;

class UpdateformController extends Controller
{
    //
    public function edit($id)
    {
       $data = Portfolio::find($id);
       //dd($data);
       return view('auth.updateform',compact('data'));
    }
    public function update(Request $request,$id)
    {
        $userid = Auth::user()->id;
        $data = Portfolio::find($id);
        $image=$request->file('image');
        $imageName = time().'-'.$request->file('image')->getClientOriginalName();
        $updated_image = $request->image->move(public_path('images'), $imageName);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->image = $imageName;
        $data->summary = $request->summary;
        $data->client_name = $request->clientname;
        $data->client_review = $request->clientreview;
        $data->save();
        return redirect('/user/display_all_portfolio/'.$userid);   
    }

    public function delete($id)
    {
        $data = Portfolio::find($id);
        $data->delete();
        return redirect()->back();
    }  
}
