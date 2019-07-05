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
        // $user = Survey::create($request->all()+['user_id'=>auth()->id()]);
        //
        // return redirect('/');

     $mainUser = Survey::where('user_id', auth()->id())->whereRaw('DATE(created_at) = CURRENT_DATE')->get();


    if (count($mainUser) < 1 ){
          // Survey::create(['user_id' => $user]);
          Survey::create($request->all()+['user_id'=>auth()->id()]);

          session()->flash('message','Evaluation Submitted');
          return redirect('/');
      }
      else{
        session()->flash('message','You have filled a survey today');
        return redirect()->back();
      }
  }
  }
