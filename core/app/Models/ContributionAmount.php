<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContributionAmount extends Model
{
    use HasFactory;


    protected $guarded=[];


    public function questionnaire_answers(){


        return $this->hasOne(QuestionaireAnswer::class,'id','plan_id');
    }

    public function bankdetails(){
        return $this->hasOne(BankDetail::class,'user_id','user_id')->where('status',1);
    }
}
