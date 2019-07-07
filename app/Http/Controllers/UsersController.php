<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;

class UsersController extends Controller
{
   
   public function view()
   {
       return view('users.login');
   }
   
   
   
    public function create()
    {
        $user= new users; 
        $user->name=request('name');
        $user->password=request('password');
        $user->save();
        return redirect('/');
    }
    public function login()
    {
       $user= users::find(request()->name)->get();
       if($user->passwrd==request()->password){

        return view('/');
       }else{

        return veiw('users.login');
       }
    }
}
