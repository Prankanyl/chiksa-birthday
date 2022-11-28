<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;
use Psr\Log\LoggerInterface;
use Throwable;

class AnswerController extends Controller
{
    public function __construct(
        private LoggerInterface $logger
    ) {
    }

    public function show()
    {
        $answers = Answer::get();
        return view('home.answers', compact('answers'));
    }

    public function add(Request $request)
    {
        try {
            $answer = new Answer;
            $answer->question_id = $request->question_id ?? 1;
            $answer->answer = $request->answer ?? null;
            $answer->self_answer = $request->self_answer ?? null;
            $answer->save();
        } catch (Throwable $e) {
            $this->logger->warning(sprintf('Answer add error - %s', $e->getMessage()));
        }
    }
}
