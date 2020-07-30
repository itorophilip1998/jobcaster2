<?php

namespace App\Http\Controllers;

use App\Managers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManagersController extends Controller
{

    
    public function update(Request $request, $managers)
    {
        $table=Managers::find();
        $table->phone=$request->phone;
        $table->address=$request->address;
        $table->company=$request->company;
        $table->twitter=$request->twitter;
        $table->facebook=$request->facebook;
        $table->profile_photo=$request->profile_photo;
        $table->user_id=$managers;
        $table->save();
            $message=[
                'code' => 200,
                'user' => User::where('id',$managers)->get(),
                'message' => "Logged In"
            ];
            return response()->json($message);
    }

}
