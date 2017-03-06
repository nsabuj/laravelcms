<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Illuminate\Support\Facades\Redirect;
class CustomAuthController extends Controller
{
    //

    public function CustomPostRegister(Request $request)
    {
        $users = array($request['user1'],$request['user2']);

        foreach ($users as $user){

            $validator = $this->validator($user);

            if ($validator->fails()) {

                $this->throwValidationException(
                    $request, $validator
                );
            }

            Auth::login($this->create($user));

        }

        return redirect($this->redirectPath());


    }

    public function logout(){

            Auth::logout();

        Session::flash('message', 'logged out successfully!');
        return redirect('/login');

    }

}
