<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Enum\GameGenre;
use App\Enum\GameStatus;
use Spatie\LaravelData\Data;

class GameData extends Data
{
    public function __construct(
        public            $title,
        public string     $description,
        public int        $minPlayers,
        public int        $maxPlayers,
        public int        $minPlayingTime,
        public int        $maxPlayingTime,
        public int        $minPlayerAge,
        public GameGenre  $genre,
        public GameStatus $status,
    ) {}
}
