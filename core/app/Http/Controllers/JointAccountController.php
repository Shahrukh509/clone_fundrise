<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JointAccount;

class JointAccountController extends Controller
{
  public function add_joint_account(Request $request){


   $validator = Validator::make($request->all(),[

            'age' => 'required']);

        if(!$validator->passes())
        {

             return response()->json([
            'success' => false,
            'error_issue' => true,
             'error' => $validator->errors()->toArray()
         ]);
    
        }

        if($request->account_type1 != null){
           $data1 = JointAccount::create([
            'user_id' => Auth()->user()->id,
            'account_type' => $request->account_type1,
            'line_Address_1' => $request->line_address_1_1,
            'line_Address_2' => $request->line_address_2_1,
            'city'           => $request->city1,
            'state'          => $request->state1,
            'zip_code'       => $request->zip_code1
        ]);

        }

        if($request->account_type2 != null){
           
            $data2 = JointAccount::create([
            'user_id' => Auth()->user()->id,
            'account_type' => $request->account_type2,
            'line_Address_1' => $request->line_address_1_2,
            'line_Address_2' => $request->line_address_2_2,
            'city'           => $request->city2,
            'state'          => $request->state2,
            'zip_code'       => $request->zip_code2
        ]);

        }

        if($data1 && $data2){


        }
        else{

         
        }

       





  }
}
