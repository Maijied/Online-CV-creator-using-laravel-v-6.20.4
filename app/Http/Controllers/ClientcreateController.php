<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Client;
use App\User;
use DB;

class ClientcreateController extends Controller
{
    public function createuser()
    {
            return view('createuser');
         
    }
    public function userlist()
    {
        $client = DB::select('SELECT * FROM `client` ');
        return view('userlist', ['client'=>$client]);
           
           
    }
    public function createuseraction(Request $request)
    {
        
            $data = new Client();
            $data->name = $request['name'];
            $data->about = $request['about'];
            $data->address = $request['address'];
            $data->educationalbackgroud = $request['educationalbackgroud'];
            $data->experience = $request['experience'];
            $data->projects = $request['projects'];
            $data->carrerchoice = $request['carrerchoice'];
            $data->email = $request['email'];
            // $data->password = Hash::make($request['password']);
            // $data->token = Str::random(30);
            // return $data;
            $data->save();
            return redirect()->route('user-list');
    }
    // public function showuserlist()
    // {
        
    //         return view('userlist');
           
    // }
}
