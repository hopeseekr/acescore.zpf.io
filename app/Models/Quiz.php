<?php

namespace App\Models;

// A database isn't needed, so I'm just going to use a JSON store.

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use RuntimeException;

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
