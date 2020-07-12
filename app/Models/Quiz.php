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

namespace App\Models;

// A database isn't needed, so I'm just going to use a JSON store.

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;

class Quiz extends Collection
{
    public function __construct($questions = [])
    {
        if (empty($items)) {
            $jsonData = Storage::get('quiz.json');

            $questions = json_decode($jsonData, true, 512, JSON_THROW_ON_ERROR);
        }

        parent::__construct($questions);
    }
}
