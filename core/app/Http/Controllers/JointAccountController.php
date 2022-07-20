<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JointAccount;
use Illuminate\Support\Facades\Validator;
use Session;
use Auth;

class JointAccountController extends Controller
{
  public function add_joint_account(Request $request){


   $validator = Validator::make($request->all(),[

            'zip_code1' => 'integer|regex:/\b\d{5}\b/',
            'zip_code2' => 'integer|regex:/\b\d{5}\b/',
            'city1' => 'regex:/^[a-zA-Z]+$/u',
            'city2' => 'regex:/^[a-zA-Z]+$/u'
        ]);

        if(!$validator->passes())
        {

             return response()->json([
            'success' => false,
            'error_issue' => true,
             'error' => $validator->errors()->toArray()
         ]);
    
        }

    
           $data = JointAccount::create([
            'user_id' => Auth()->user()->id,
            'account_type' => $request->account_type1,
            'line_address1_1' => $request->line_address1_1,
            'line_address2_1' => $request->line_address2_1,
            'city1'           => $request->city1,
            'state1'          => $request->state1,
            'zip_code1'       => $request->zip_code1,
            'line_address1_2' => $request->line_address1_2,
            'line_address2_2' => $request->line_address2_2,
            'city2'           => $request->city2,
            'state2'          => $request->state2,
            'zip_code2'       => $request->zip_code2
        ]);

        

        if($data){

         return response()->json([
            'success' => true
         ]);


        }
        else{


         return response()->json([
            'success' => false
         ]);

         
        }

       





  }
}
