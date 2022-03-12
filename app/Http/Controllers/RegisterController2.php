<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\State;
use App\Models\Country;
use App\Models\Saveddetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RegisterController2 extends Controller
{
    public function registerStep2() {
        $countries = Country::pluck('country_name')->all();
        $states = State::pluck('state_name')->all();
        return view('auth.registerstep2', ['countries' => $countries, 'states' => $states ]);
    }

    protected function validator(array $data)
    {

        return Validator::make($data, [
            'country' => ['required'],
            'state' => ['required'],
            'city' => ['required'],
            'postalcode' => ['required'],
            'dob' => ['required'],
            'phone' => ['required','min:10','max:12'],
        ]);
    
    }
    
    protected function create(Request $request)
    { 
        $validate = $this->validator($request->all());
        if($validate->fails())
        {
            return redirect('/register-step2')->withErrors($validate)->withInput();
        }

        $user_id = Auth::user()->id;  
        $birthday = Carbon::parse($request['dob'])->format('Y-m-d');

        $user = User::find($user_id);
        $user->saveddetails = 1;
        $user->save();

        Saveddetail::create([
            'customer_id' => $user_id,
            'country_id' => $request['country'],
            'state_id' => $request['state'],
            'city' => $request['city'],
            'postal_code' => $request['postalcode'],
            'dob' => $birthday,
            'phone' => $request['phone'],
        ]);

        return redirect('/register-step3');
    }
}
