<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class UserNumberController extends Controller
{
    //
    public static function number_of_users()
    {
        //
        $all_users = User::all();
        if(count($all_users) >= 1)
        {
        //   echo "There is an admin";
        }
      else{
        //   echo " There is no admin";
         }

         $numusers = count($all_users);
         View::share('number', $numusers);
         return count($all_users );
    }

    public function deleteuseraccount()
    {
      $user = User::find(Auth::user()->id);

        Auth::logout();
        $user->delete();
        return redirect('/createdevents')->with('success' , 'Account was succesfully');
    }
}
