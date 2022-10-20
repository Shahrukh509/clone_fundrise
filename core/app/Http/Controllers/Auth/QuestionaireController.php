<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\AdminNotification;
use App\Models\GeneralSetting;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Questionaire;
use App\Models\QuestionaireAnswer;
use App\Models\UserAnswer;
use App\Models\UserLogin;
use App\Models\UserWallet;
use App\Models\ContributionAmount;
use App\Models\BankDetail;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Session;
use Auth;
class QuestionaireController extends Controller
{

 public function __construct()
    {
        // $this->middleware('guest');
        $this->middleware('auth');

        $this->activeTemplate = activeTemplate();
    }

    public function showaccountType()
    {
   
      $page_title = "Sign Up";
      $activeTemplate = $this->activeTemplate;
      $question = Questionaire::where('url_slug','account-type')->first();
        return view($this->activeTemplate . 'user.auth.questionnaire.account_type', compact('page_title','activeTemplate','question'));

    }

  
  public function showAge(Request $request){
     $page_title = "Sign Up";
        $activeTemplate = $this->activeTemplate;
        $ajax = false;

        return view($this->activeTemplate . 'user.auth.questionnaire.age', compact('page_title','activeTemplate','ajax'));

  }

  // public function accounttypeStore(Request $request){

  //   $validator = Validator::make($request->all(),[
  //           'answer_id' => 'required']);
  //       if(!$validator->passes()){

  //         return response()->json([
  //           'success' => false,
  //           'error_issue' => true,
  //            'error' => $validator->errors()->toArray()
  //        ]);
    
  //   }
  //   // dd(Auth()->user()->id);
    
  //  $data = UserAnswer::create([

  //     'user_id' => Auth()->user()->id,
  //     'questionaire_answer_id' => $request->answer_id
  //  ]);
  //  if($data){

  //     $page_title = "Sign Up";
  //     $question = Questionaire::where('url_slug','investment-experience')->first();
  //     $url_slug = 'source-of-wisdom';
  //     $url = Route('user.investment.store');

  //     // foreach($question->options as $data){

  //     //   dd($data);
  //     // }

  //   return (string) view($this->activeTemplate . 'user.auth.questionnaire.questions', compact('page_title','question','url','url_slug')); 

  //  }else{

  //     return response()->json([
  //           'success' => false,
  //           'added' => false
  //        ]);



  //  }


  // }

  // public function storeAccountType(Request $request)
  // {

  //  if($request->ajaxback){
  //     //  $page_title = "Sign Up";
  //     // $question = Questionaire::where('url_slug','age')->first();

  //     // // basically we inject the slug of next step
  //     // $url_slug = 'investment-experience';
  //     // $prev_url = 'account-type';
  //     // $url = Route('user.investment.store');
  //     // $pre_slug_url = 'investment-experience';

  //     // // foreach($question->options as $data){

  //     // //   dd($data);
  //     // // }

  //   return (string) view($this->activeTemplate . 'user.auth.questionnaire.ajax_age'); 

  //  }

  //  $data = UserAnswer::where('user_id',Auth()->user()->id)->where('questionaire_id',$request->questionaire_id)->first();
  //  if($data){


  //   $data->questionaire_answer_id = $request->account_type;


  //  }else{

  //   $data = UserAnswer::create([
  //     'user_id' => Auth()->user()->id,
  //     'questionaire_id' => $request->questionaire_id,
  //     'questionaire_answer_id' => $request->account_type
  //  ]);
  //  }

  //   if($data){

  //     return (string) view($this->activeTemplate . 'user.auth.questionnaire.ajax_age'); 
  //   }
  //   else{

  //     return response()->json([
  //        'added' => false
  //     ]);
  //   }

   
  // }

  public function storeAccountType(Request $request)
   {  
      if($request->ajaxback){
         return (string) view($this->activeTemplate . 'user.auth.questionnaire.ajax_age'); 
      }

      $data = UserAnswer::where('user_id',Auth()->user()->id)->where('questionaire_id',$request->questionaire_id)->first();

      if($data){
         $data->questionaire_answer_id = $request->account_type;
         $data->save();
      }else{
         $data = UserAnswer::create([
            'user_id' => Auth()->user()->id,
            'questionaire_id' => $request->questionaire_id,
            'questionaire_answer_id' => $request->account_type
         ]);
      }

      if($data){
         $account_type = $data->hasAccountType->options;
         return (string) view($this->activeTemplate . 'user.auth.questionnaire.ajax_age', compact('account_type')); 
      }
      else{
         return response()->json([
            'added' => false
         ]);
      }
   }


  public function storeAge(Request $request){
      if($request->ajaxback){
         $page_title = "Sign Up";
         $question = Questionaire::where('url_slug','investment-experience')->first();
         // basically we inject the slug of next step
         $url_slug = 'source-of-wisdom';
         $prev_url = 'investment-experience';
         $url = Route('user.investment.store');
         $pre_slug_url = 'investment-experience';

         return (string) view($this->activeTemplate . 'user.auth.questionnaire.questions', compact('page_title','question','url','url_slug','prev_url','pre_slug_url')); 
      }

      $validator = Validator::make($request->all(),
      [
         'age' => 'required'
      ]);
      if(!$validator->passes()){
         return response()->json([
            'success' => false,
            'error_issue' => true,
            'error' => $validator->errors()->toArray()
         ]);
      }
    
      $data = User::where('id',Auth()->user()->id)->first();

      $data->age = $request->age;
      $data->save();

      if($data){
         $page_title = "Sign Up";
         $question = Questionaire::where('url_slug','investment-experience')->first();
         // basically we inject the slug of next step
          $url_slug = 'source-of-wisdom';
         $prev_url = 'investment-experience';
         $url = Route('user.investment.store');
         $pre_slug_url = 'investment-experience'; 

         if(isset($request->account_type) && $request->account_type=='Retirement Account'){
            $account_type = $request->account_type;
            $ira_view = (string) view($this->activeTemplate . 'user.auth.questionnaire.ira.ajax_page_signup', compact('page_title','question', 'account_type'));
            return response()->json(['account_type'=>'retired', 'view' => $ira_view]); 
         }else{
            return (string) view($this->activeTemplate . 'user.auth.questionnaire.questions', compact('page_title','question','url_slug','prev_url','url','pre_slug_url')); 
         }
      }else{
         return response()->json([
            'success' => false,
            'added' => false
         ]);
      }
   }

  // public function storeAge(Request $request){

  //   if($request->ajaxback){
  //      $page_title = "Sign Up";
  //     $question = Questionaire::where('url_slug','investment-experience')->first();

  //     // basically we inject the slug of next step
  //     $url_slug = 'source-of-wisdom';
  //     $prev_url = 'investment-experience';
  //     $url = Route('user.investment.store');
  //     $pre_slug_url = 'investment-experience';

  //     // foreach($question->options as $data){

  //     //   dd($data);
  //     // }

  //   return (string) view($this->activeTemplate . 'user.auth.questionnaire.questions', compact('page_title','question','url','url_slug','prev_url','pre_slug_url')); 

  //  }

  

  //  $validator = Validator::make($request->all(),[
  //           'age' => 'required']);
  //       if(!$validator->passes()){

  //         return response()->json([
  //           'success' => false,
  //           'error_issue' => true,
  //            'error' => $validator->errors()->toArray()
  //        ]);
    
  //   }
  //   // dd(Auth()->user()->id);
    
  //  $data = User::where('id',Auth()->user()->id)->first();



  //  $data->age = $request->age;
  //  $data->save();
  //  if($data){

  //     $page_title = "Sign Up";
  //     $question = Questionaire::where('url_slug','investment-experience')->first();
  //     // basically we inject the slug of next step
  //     $url_slug = 'source-of-wisdom';
  //     $prev_url = 'investment-experience';
  //     $url = Route('user.investment.store');
  //     $pre_slug_url = 'investment-experience';

  //     // foreach($question->options as $data){

  //     //   dd($data);
  //     // }

  //   return (string) view($this->activeTemplate . 'user.auth.questionnaire.questions', compact('page_title','question','url','url_slug','prev_url','pre_slug_url')); 

  //  }else{

  //     return response()->json([
  //           'success' => false,
  //           'added' => false
  //        ]);



  //  }
  // }


  public function investStore(Request $request){

   // dd('hi at investStore');

   if($request->ajaxback){
           $page_title = "Sign Up";
      $question = Questionaire::where('url_slug','source-of-wisdom')->first();
     
      // basically we inject the slug of next step, u can say two step ahead url
      $url_slug = 'survey
      ';
      $pre_slug_url = 'investment-experience';
      $url = Route('user.sourceofwisdom.store');

      $prev_url = Route('user.step.age.store');

      // foreach($question->options as $data){

      //   dd($data);
      // }

    return (string) view($this->activeTemplate . 'user.auth.questionnaire.questions', compact('page_title','question','url','url_slug','prev_url','pre_slug_url'));

   }

  
   $data = UserAnswer::where('user_id',Auth()->user()->id)->where('questionaire_id',$request->question_id)->first();

   if($data){

    $data->questionaire_answer_id = $request->answer_id;
    $data->save();
   }
   else
   {

   $data = UserAnswer::create([

      'user_id' => Auth()->user()->id,
      'questionaire_id' => $request->question_id,
      'questionaire_answer_id' => $request->answer_id
   ]);

    }

   if($data){

      $page_title = "Sign Up";
      $question = Questionaire::where('url_slug','source-of-wisdom')->first();
     
      // basically we inject the slug of next step, u can say two step ahead url
      $url_slug = 'survey
      ';
      $pre_slug_url = 'investment-experience';
      $url = Route('user.sourceofwisdom.store');

      $prev_url = Route('user.step.age.store');
      

      // foreach($question->options as $data){

      //   dd($data);
      // }

    return (string) view($this->activeTemplate . 'user.auth.questionnaire.questions', compact('page_title','question','url','url_slug','prev_url','pre_slug_url')); 

   }else{

      return response()->json([
            'success' => false,
            'added' => false
         ]);


   }
}


  public function sourceofwisdomStore(Request $request){

    if($request->ajaxback){

     $page_title = "Sign Up";
      $question = Questionaire::where('url_slug','survey')->first();
      // dd()
      $url = Route('user.survey.store');
      // basically we inject the slug of next step
      $url_slug = 'motivation';

      // previous url is mendatory it tells go to specific route and show desire page 
       $prev_url = Route('user.investment.store');
       $pre_slug_url = 'source-of-wisdom';

    return (string) view($this->activeTemplate . 'user.auth.questionnaire.questions', compact('page_title','question','url','url_slug','prev_url'));


    }

   $data = UserAnswer::where('user_id',Auth()->user()->id)->where('questionaire_id',$request->question_id)->first();

   if($data){

    $data->questionaire_answer_id = $request->answer_id;
    $data->save();
   }
   else
   {

   $data = UserAnswer::create([

      'user_id' => Auth()->user()->id,
      'questionaire_id' => $request->question_id,
      'questionaire_answer_id' => $request->answer_id
   ]);

    }


   if($data){

      $page_title = "Sign Up";
      $question = Questionaire::where('url_slug','survey')->first();
      // dd()
      $url = Route('user.survey.store');
      // basically we inject the slug of next step
      $url_slug = 'motivation';
       $prev_url = Route('user.investment.store');
         $pre_slug_url = 'source-of-wisdom';
         

    return (string) view($this->activeTemplate . 'user.auth.questionnaire.questions', compact('page_title','question','url','url_slug','prev_url','pre_slug_url')); 

   }else{

      return response()->json([
            'success' => false,
            'added' => false
         ]);


   }

  }

  public function surveyStore(Request $request){

   if($request->ajaxback){

    $page_title = "Sign Up";
      $question = Questionaire::where('url_slug','motivation')->first();
      $url = Route('user.motivation.store');
      // basically we inject the slug of next step
      $url_slug = 'duration-of-investment';
      $prev_url = route('user.sourceofwisdom.store');
      $pre_slug_url = 'survey';

    return (string) view($this->activeTemplate . 'user.auth.questionnaire.questions', compact('page_title','question','url','url_slug','prev_url','pre_slug_url'));


   }

   
$data = UserAnswer::where('user_id',Auth()->user()->id)->where('questionaire_id',$request->question_id)->first();

   if($data){

    $data->questionaire_answer_id = $request->answer_id;
    $data->save();
   }
   else
   {

   $data = UserAnswer::create([

      'user_id' => Auth()->user()->id,
      'questionaire_id' => $request->question_id,
      'questionaire_answer_id' => $request->answer_id
   ]);

    }


   if($data){

      $page_title = "Sign Up";
      $question = Questionaire::where('url_slug','motivation')->first();
      $url = Route('user.motivation.store');
      // basically we inject the slug of next step
      $url_slug = 'duration-of-investment';
     $prev_url = route('user.sourceofwisdom.store');
      $pre_slug_url = 'survey';
      

    return (string) view($this->activeTemplate . 'user.auth.questionnaire.questions', compact('page_title','question','url','url_slug','prev_url','pre_slug_url')); 

   }else{

      return response()->json([
            'success' => false,
            'added' => false
         ]);


   }

  }

   public function motivationStore(Request $request){
  
      if($request->ajaxback){

      $page_title = "Sign Up";
      $question = Questionaire::where('url_slug','duration-of-investment')->first();
      $url = Route('user.dofinvestmen.store'); 
      // this is the route where its function has been defined in lower portion of this file

         // basically we inject the slug of next step
      $url_slug = 'investment-planning';
        $prev_url = route('user.survey.store');
        $pre_slug_url = 'motivation';


    return (string) view($this->activeTemplate . 'user.auth.questionnaire.questions', compact('page_title','question','url','url_slug','prev_url','pre_slug_url'));


      }
   

   $data = UserAnswer::where('user_id',Auth()->user()->id)->where('questionaire_id',$request->question_id)->first();

   if($data){

    $data->questionaire_answer_id = $request->answer_id;
    $data->save();
   }
   else
   {

   $data = UserAnswer::create([

      'user_id' => Auth()->user()->id,
      'questionaire_id' => $request->question_id,
      'questionaire_answer_id' => $request->answer_id
   ]);

    }


   if($data){

      $page_title = "Sign Up";
      $question = Questionaire::where('url_slug','duration-of-investment')->first();
      $url = Route('user.dofinvestmen.store'); 
      // this is the route where its function has been defined in lower portion of this file

         // basically we inject the slug of next step
      $url_slug = 'investment-planning';
        $prev_url = route('user.survey.store');
        $pre_slug_url = 'motivation';
        

    return (string) view($this->activeTemplate . 'user.auth.questionnaire.questions', compact('page_title','question','url','url_slug','prev_url','pre_slug_url')); 

   }else{

      return response()->json([
            'success' => false,
            'added' => false
         ]);


   }

  }


  public function dofinvestmentStore(Request $request){

     if($request->ajaxback){
      $page_title = "Sign Up";
      $question = Questionaire::where('url_slug','investment-planning')->first();

      $url = Route('user.investingplanstore.store');

         // basically we inject the slug of next step
      $url_slug = 'signup-checkout/signup';
        $prev_url = route('user.motivation.store');
        $pre_slug_url = 'duration-of-investment';

    return (string) view($this->activeTemplate . 'user.auth.questionnaire.questions', compact('page_title','question','url','url_slug','prev_url','pre_slug_url'));




     }

$data = UserAnswer::where('user_id',Auth()->user()->id)->where('questionaire_id',$request->question_id)->first();

   if($data){

    $data->questionaire_answer_id = $request->answer_id;
    $data->save();
   }
   else
   {

   $data = UserAnswer::create([

      'user_id' => Auth()->user()->id,
      'questionaire_id' => $request->question_id,
      'questionaire_answer_id' => $request->answer_id
   ]);

    }

   if($data){

      $page_title = "Sign Up";
      $question = Questionaire::where('url_slug','investment-planning')->first();

      $url = Route('user.investingplanstore.store');

         // basically we inject the slug of next step
      $url_slug = 'signup-checkout/signup';
    $prev_url = route('user.motivation.store');
        $pre_slug_url = 'duration-of-investment';
        

    return (string) view($this->activeTemplate . 'user.auth.questionnaire.questions', compact('page_title','question','url','url_slug','prev_url','pre_slug_url')); 

   }else{

      return response()->json([
            'success' => false,
            'added' => false
         ]);


   }




  }

  public function investingplanStore(Request $request){

$data = UserAnswer::where('user_id',Auth()->user()->id)->where('questionaire_id',$request->question_id)->first();

   if($data){

    $data->questionaire_answer_id = $request->answer_id;
    $data->save();
   }
   else
   {

   $data = UserAnswer::create([

      'user_id' => Auth()->user()->id,
      'questionaire_id' => $request->question_id,
      'questionaire_answer_id' => $request->answer_id
   ]);

    }


   if($data){

      $page_title = "Sign Up";

    return (string) view($this->activeTemplate . 'user.auth.questionnaire.ajax_page_signup', compact('page_title')); 

   }else{

      return response()->json([
            'success' => false,
            'added' => false
         ]);





  }

}

// public function ajax_back(Request $request){

//   $page_title = "Sign Up";
//       $question = Questionaire::where('url_slug',$request->prev_url)->first();
//       $id = $question->id - 1;
//       $data = Questionaire::where('id',$id)->first();
//       $url = $request->url;
//       $url_slug = $request->url_slug;
//       $prev_url = $data->url_slug;


//   return (string) view($this->activeTemplate . 'user.auth.questionnaire.questions', compact('page_title','question','url','url_slug','prev_url')); 



// }

public function showsignup(Request $request){
      $page_title = "Sign Up";
      $questionairAnswer = QuestionaireAnswer::where('options', 'Retirement Account')->first();
      $userAnswer =  UserAnswer::where('user_id', Auth::user()->id)->where('questionaire_id', $questionairAnswer->questionaire_id)->where('questionaire_answer_id', $questionairAnswer->id)->first();
      if(!empty($userAnswer)){
         $account_type = $questionairAnswer->options;
         return (string) view($this->activeTemplate . 'user.auth.questionnaire.ira.page_signup', compact('page_title', 'account_type'));
      }else{
         return (string) view($this->activeTemplate . 'user.auth.questionnaire.page_signup', compact('page_title'));
      }
   }
// public function showsignup(Request $request){
 
//    $page_title = "Sign Up";

//   return (string) view($this->activeTemplate . 'user.auth.questionnaire.page_signup',compact('page_title'));


// }


public function storingbasicinfo(Request $request){

    $validator = Validator::make($request->all(),[
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'country_citizen' => 'required',
            'country_residence' => 'required'
         ]);

        if(!$validator->passes()){

          return response()->json([
            'success' => false,
            'error_issue' => true,
             'error' => $validator->errors()->toArray()
         ]);

        }

   $user = User::where('id',Auth()->user()->id)->first();
   $user->firstname = $request->firstname;
   $user->lastname = $request->lastname;
   $user->country_of_citizenship = $request->country_citizen;
   $user->country_of_residence = $request->country_residence;
   $user->save();
   if($user){

      return response()->json([
            'success' => true,
            'message' => 'data added'
         ]);


   }

}

public function storingaccdetails(Request $request){



$validator = Validator::make($request->all(),[
            'zip_code' => 'integer|regex:/\b\d{5}\b/',
            'form_account' => 'required'
         ]);

        if(!$validator->passes()){

          return response()->json([
            'success' => false,
            'error_issue' => true,
             'error' => $validator->errors()->toArray()
         ]);

        }

   $user= User::where('id',Auth()->user()->id)->first();
   $user->mobile = $request->mobile;
   $user->address = $request->address;
   $user->city = $request->city;
   $user->state = $request->state;
   $user->zip_code = $request->zip_code;
   $user->save();


   $data = UserAnswer::where('user_id',Auth()->user()->id)->where('questionaire_id',$request->questionaire_id)->first();

   if($data){

      $data->user_id = Auth()->user()->id;
      $data->questionaire_id = $request->questionaire_id;
      $data->questionaire_answer_id = $request->form_account;
      $data->save();

      // here form_account is questionaire_answer_id in user_answer table

   }else{

      $data = UserAnswer::create([
         'user_id' => Auth()->user()->id,
         'questionaire_id' => $request->questionaire_id,
         'questionaire_answer_id' => $request->form_account 
      ]);


   }

   if($data){

    return response()->json([
            'success' => true,
            'message' => 'data added'
         ]);


   }else{
  

      return response()->json([
            'success' => false,
            'message' => 'data not added'
         ]);


   }

}

public function storingfunding(Request $request){



$validator = Validator::make($request->all(),[
            'amount' => 'required|numeric|gt:0',
            'social_sec_num' => 'required',
            'dob' => 'required|date',
            'bank_name' =>'required|max:255',
            'routing_num' => 'required|numeric',
            'bank_account_number' => 'min:12|required_with:confirm_bankaccno|same:bank_account_number'

         ]);

        if(!$validator->passes()){

          return response()->json([
            'success' => false,
            'error_issue' => true,
             'error' => $validator->errors()->toArray()
         ]);

        }

  // dd('everything is good');
   $contributed_amount = ContributionAmount::where('user_id', Auth()->user()->id)->where('comment','1stcontribution')->first();
   $data = UserAnswer::where('user_id',Auth()->user()->id)->where('questionaire_id',$request->questionaire_id)->first();
   $bankdata = BankDetail::where('user_id',Auth()->user()->id)->where('account_number',$request->bank_account_number)->first();

   if($contributed_amount){

    $contributed_amount->user_id = Auth()->user()->id;

   $contributed_amount->amount = $request->amount;
   $contributed_amount->bill = $request->amount;
   $contributed_amount->comment = '1stcontribution';
   $contributed_amount->save();
    }

   if($data){

      $data->user_id = Auth()->user()->id;
      $data->questionaire_id = $request->questionaire_id;
      $data->questionaire_answer_id = $request->answer_id;
      $data->save();

      // here form_account is questionaire_answer_id in user_answer table

      if($bankdata){
       
       $bankdata->user_id = Auth()->user()->id;
       $bankdata->account_type = $request->account_type;
       $bankdata->name = $request->bank_name;
       $bankdata->routing_number = $request->routing_num;
       $bankdata->account_number = $request->bank_account_number;
       $bankdata->social_security_number= $request->social_sec_num;
       $bankdata->date_of_birth = $request->dob;
       $bankdata->save();
       }

   }else{


      $contributed_amount = ContributionAmount::create([
      'user_id' => Auth()->user()->id,
      'amount' => $request->amount,
      'bill' => $request->amount,
      'comment' => '1stcontribution' ]);

      $bankdata = BankDetail::create([
      'user_id' => Auth()->user()->id,
     'account_type' => $request->account_type,
     'name' => $request->bank_name,
     'routing_number' => $request->routing_num,
    'account_number' => $request->bank_account_number,
    'social_security_number' => $request->social_sec_num,
    'date_of_birth' => $request->dob,
]);
      $data = UserAnswer::create([
         'user_id' => Auth()->user()->id,
         'questionaire_id' => $request->questionaire_id,
         'questionaire_answer_id' => $request->answer_id 
      ]);


   }

   if($data && $contributed_amount && $bankdata){
      // dd('hi everything saved');

    return response()->json([
            'success' => true,
            'message' => 'data added'
         ]);


   }else{
  

      return response()->json([
            'success' => false,
            'message' => 'data not added'
         ]);


   }

}

public function storeIraAddress(Request $request)
   {
      $validator = $request->validate([
         'address' => 'required|max:255',
         'city' => 'required|max:255',
         'date_of_birth' => 'required',
         'state' => 'required',
         'phone' => 'required|max:20',
         'social_security' => 'required|max:15',
         'zip' => 'required|max:10',
     ]); 

      $user = Auth::user();
      $user->address = $request->address;
      $user->city = $request->city;
      $user->state = $request->state;
      $user->zip_code = $request->zip;
      $user->mobile  = $request->phone;
      $user->save();

      $bank_details = BankDetail::create([
         'user_id' => Auth::user()->id,
         'account_type' => $request->account_type,
         'social_security_number' => $request->social_security,
         'date_of_birth' => $request->date_of_birth,
      ]);
      
      if($bank_details){
         return response()->json([
            'success' => true,
            'message' => 'data added'
         ]);
      }
   }


}