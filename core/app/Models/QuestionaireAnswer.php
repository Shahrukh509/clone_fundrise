<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionaireAnswer extends Model
{
    use HasFactory;

     protected $fillable = [];


public function sub_options(){

  return $this->hasMany(Answeroption::class,'questionaire_answers_id','id');
}


     
}
