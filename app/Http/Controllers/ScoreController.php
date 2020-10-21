<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\ScoreEvent;
class ScoreController extends Controller
{
    public function pushScoreValue(Request $req){
       $score = $req->input('score');
       event(new ScoreEvent($score));
       return $score;
    }
}
