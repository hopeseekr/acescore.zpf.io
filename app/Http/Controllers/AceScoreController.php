<?php declare(strict_types=1);

/**
 * This file is part of acescore.zpf.io, one of HopeSeekr's Project.
 *
 * Copyright © 2020 PHP Experts, Inc.
 * Author: Theodore R. Smith <theodore@phpexperts.pro>
 *   GPG Fingerprint: 4BF8 2613 1C34 87AC D28F  2AD8 EB24 A91D D612 5690
 *   https://github.com/hopeseekr/acescore.zpf.io
 *
 * This file is licensed under the MIT License.
 */

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
                'answers'   => ['array', 'size:10'],
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
