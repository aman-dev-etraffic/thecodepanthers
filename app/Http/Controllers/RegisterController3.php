<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ProfileData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserRegistrationMail;
use App\Mail\WelcomeMail;

class RegisterController3 extends Controller
{
    public function registerStep3() {
        return view('auth.registerstep3');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'title' => ['required'],
            'description' => ['required'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg' , 'max:1024'],
            'skills' => ['required'],
        ]);
    }

    protected function create(Request $request)
    {
        $validate = $this->validator($request->all());
        if($validate->fails()) {
            return redirect('/register-step3')->withErrors($validate)->withInput();
        }
        $user_id = Auth::user()->id;
        $user = User::find($user_id);

        $user->completeprofile = 1;
        //$user->approved = 1;
        $user->save();

        $imageName = time().'-'.$request->file('image')->getClientOriginalName();
        $request->image->move(public_path('images'), $imageName);

        ProfileData::create([
            'customer_id' => $user_id,
            'title' => $request['title'],
            'description' => $request['description'],
            'image' => $imageName,
            'skills' => $request['skills'],
        ]);

        $new_user = array(
            'firstname' => $user->firstname,
            'lastname' => $user->lastname,
            'email' => $user->email,
        );

        Mail::to('vansh.etraffic@gmail.com')->send(new UserRegistrationMail($new_user));
        Mail::to($user->email)->send(new WelcomeMail($new_user));           
        return redirect('/approved-form');
    }
}
