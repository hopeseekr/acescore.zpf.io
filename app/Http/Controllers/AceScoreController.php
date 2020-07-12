<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AceScoreController extends Controller
{
    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'answers' => ['array', 'size:10'],
                'answers.*' => 'boolean',
            ]);
        } catch (ValidationException $e) {
            return new JsonResponse($e->getResponse(), 400);
        }

        $answers = $request->get('answers');
        $aceScore = array_sum($answers);

        return new JsonResponse([
            'ACEScore' => $aceScore,
        ]);
    }
}
