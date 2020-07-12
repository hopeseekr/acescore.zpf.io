<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    private Quiz $quiz;

    public function __construct(Quiz $quiz = null)
    {
        if (!$quiz) {
            $quiz = new Quiz();
        }
        $this->quiz = $quiz;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new JsonResponse($this->quiz->all());
    }

    public function show(int $questionId)
    {
        return new JsonResponse([
            'id'       => $questionId,
            'question' => $this->quiz->get($questionId - 1)
        ]);
    }
}
