<?php

namespace App\Http\Controllers;
 
use App\User;
use App\Applicant;
use App\Managers;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{

    public function update(Request $request, $applicant)
    {
        $table=Applicant::find($applicant);
            $table->phone=$request->phone;
            $table->address=$request->address;
            $table->nationality=$request->nationality;
            $table->state=$request->state;
            $table->dob=$request->dob;
            $table->gender=$request->gender;
            $table->twitter=$request->twitter;
            $table->facebook=$request->facebook;
            $table->profile_photo=$request->profile_photo;
            $table->user_id=$applicant;
            $table->save();
            $message=[
                'code' => 200,
                'user' => User::where('id',$applicant)->get(),
                'message' => "Logged In"
            ];
            return response()->json($message);
    }


}
