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

use App\Models\Quiz;
use Illuminate\Http\JsonResponse;

class WelcomeController extends Controller
{
    private Quiz $quiz;

    public function __construct(Quiz $quiz = null)
    {
        if (!$quiz) {
            $quiz = new Quiz();
        }
        $this->quiz = $quiz;
    }

    public function __invoke()
    {
        return view('welcome', ['questions' => $this->quiz->all()]);
    }
}
