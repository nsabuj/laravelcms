<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

}
