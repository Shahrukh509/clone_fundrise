<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionaire extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function options(){

     return $this->hasMany(QuestionaireAnswer::class,'questionaire_id','id');

    }
}
