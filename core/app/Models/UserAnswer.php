<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAnswer extends Model
{
    use HasFactory;


    protected $fillable = ['user_id','questionaire_id','questionaire_answer_id'];

    public function hasAccountType()
    {
        return $this->hasOne(QuestionaireAnswer::class, 'id', 'questionaire_answer_id');
    }


    public function question_options(){


        return $this->hasOne(QuestionaireAnswer::class,'id','questionaire_answer_id');
    }

    public function questions(){


        return $this->hasOne(Questionaire::class,'id','questionaire_id');
    }


    public function contributions(){


    return $this->hasOne(BankDetail::class,'user_id','user_id');
    }

    public function bankdetails(){


    return $this->hasOne(ContributionAmount::class,'user_id','user_id');
    }





}
