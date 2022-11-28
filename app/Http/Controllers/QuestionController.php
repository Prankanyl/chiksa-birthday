<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function show()
    {
        $questions = Question::simplePaginate(1);
        $answers = json_decode($questions->answers);
        return view('home.questions', compact('questions', 'answers'));
    }
}
