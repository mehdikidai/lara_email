<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\GenerateHash;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class VerifyController extends Controller
{
    
    use GenerateHash;

    public function index(){

        $h = $this->encrypt('jayde.larson@example.net');

        Log::info("email: ".$h);

        return route('verify.verify',['id'=>'2','hash'=>$h]);
    }

    public function verify(Request $request){


        $hash = $request->hash;
        $id = $request->id;
        $user = User::findOrFail($id);

        if(!$this->check($hash,$user->email)){

            abort(403,'error verify email');

        }

        $user->markEmailAsVerified();


        return  'ok';


    }
}
