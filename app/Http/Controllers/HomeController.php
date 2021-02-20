<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Option;
use DB;

class HomeController extends Controller
{
    public function store(Request $req){
      $myid = $req->input('id');

      $all = DB::table('questions')->find("$myid");

      if($all){
        return redirect('/newquestion')->with('status','Please Change Question Number');
      }
      else{
      
        $data = new Question();
        $data->id = $req->input('id');
        $data->question = $req->input('question');
        
        $data->save();


      
        $choice = ['',
          $req->input('option1'),  
          $req->input('option2'),  
          $req->input('option3'),  
          $req->input('option4'),  
        ];

        for($i=1;$i<=4;$i++){
        $opt = new Option();

        $opt->question_number = $req->input('id');
        
          if($req->input('correct') == $i){
            $opt->is_correct = 1;
            $opt->option = $choice[$i];
          }
          else{
            $opt->is_correct = 0;
            $opt->option = $choice[$i];
          }
          $opt->save();
        }

        // $opt->option = array($choice);

        // return $choice;
        
        return $data;
      }
        return "Your Question Submitted Succefully";
    }

    public function display(){
      $question = Question::all();
      $ans = Option::all();

      return view('test')->with(['data'=>$ans,'question'=>$question]);
    }

    public function result(Request $req){

      $number = Question::get()->count();

      $cou =0;
      for($i=1; $i<=$number;$i++){
        $cou += $req->input($i);
      }

      return view('score',['score'=>$cou,'total'=>$number]);
    }

    public function login(Request $req){

      $username = $req->input('username');
      $password = $req->input('password');

      if(($username === 'swapnilsutar@sutar.com') && ($password === 'ABCDABCD') ){

        session(['name' => 'Admin']);

        return redirect('/newquestion');
      }
      else{
        return redirect('/login')->with('status',"Please enter correct Username or Password");
      }

    }

}

