<?php

declare(strict_types=1);

namespace App\Enum;

enum GameStatus
{
    case PRIVATE;
    case SUBMITTED;
    case APPROVED;
    case REJECTED;
}
