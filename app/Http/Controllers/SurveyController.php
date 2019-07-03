<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey;
use App\Http\Requests\CreateSurveyRequest;

class SurveyController extends Controller
  {
//     public function index()
//     {
//       Route::get('survey', function(){
//         $survey = Survey::all();
//          return view('survey.index', ['survey' => $survey]);
//
    //}

    public function store(CreateSurveyRequest $request) // I think were the database info will be going
    {
        $user = Survey::create($request->all()+['user_id'=>auth()->id()]);

        return redirect('/');
    }
  }
