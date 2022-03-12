<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminController extends Controller
{
    //
    public function index()
    {
    // $user = user::where('id' , '1')->first();
     $user =  user::all()->where('roles', 'user');
     //dd($user);
    return view('auth.adminpage',['user' => $user]);
    }

    public function deleteuser($id)
    {
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function userportfoliodisplay($id)
    {
        
        $data = Portfolio::all()->where('customer_id',$id);
        return view('auth.userportfoliodisplay',['data' => $data]);
    }     
}
