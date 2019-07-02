<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey;

class SurveyController extends Controller
{
    public function index()
    {
      Route::get('survey', function(){
        $survey = Survey::all();
         return view('survey.index', ['survey' => $survey]);

    }

    public function store() // I think were the database info will be going
    {
        var_dump(request('rate'));
        var_dump(request('hype'));
        var_dump(request('best_part'));
        var_dump(request('worst'));
        var_dump(request('satisfied'));
        var_dump(request('problems'));
        var_dump(request('quality'));
        var_dump(request('selection'));
        var_dump(request('important'));
        var_dump(request('comments'));
        var_dump(request('evaluate'));
    }
  }
}
